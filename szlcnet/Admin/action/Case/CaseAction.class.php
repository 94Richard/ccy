<?php
import('Admin', 'action');

class CaseAction extends AdminAction
{

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "case";
        $this->id = "case_id";

        $this->assign("id", "case_id"); // URL传值列名
        $this->assign('tableName', "case"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
        $this->assign("upload_dir", CASE_DIR);
        $this->assign("commed_size", ""); // 上传文件推荐的尺寸
        $this->assign("file_name", "case_spic"); // 隐藏上传文本域的名称。用于上传
    }

    public function index()
    {
        $this->parent_auth();
        $table = $this->get_table();
        if ($_GET['do'] == 'search') { // 查询
            $this->_search();
            $this->search_where = $_SESSION['search_where'];
            $this->search_value = $_SESSION['search_value'];
            //如果产品分类为0，则移除
            if ($this->search_where['case_one_id'][1] == 0) {
                unset($this->search_where['case_one_id']);
            }
            $this->assign('search_where', $this->search_value);
        }
        if ($_GET['do'] == 'back') { // 添加或者编辑完成后返回
            $this->search_where['case_one_id'] = $_GET['case_one_id'];
        }
        ($this->search_where) ? $this->search_where['language'] = $_COOKIE[LANG] : $this->search_where = array("language" => $_COOKIE[LANG]);

        $count = $this->db->table($table)
            ->where($this->search_where)
            ->count($this->id);
        if ($count == 0)
            $this->display();
        import('Page');
        // $this->set_list_num(1); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $list = $this->db->table($this->table_name)->where($this->search_where)
            ->order('case_order desc')
            ->limit($limit)
            ->select();
        foreach ($list as $key => $val) {
            $pid = $val['case_one_id']; // 分类ID
            $res = $this->db->table('case_sort')
                ->where(array(
                    "case_sort_id" => $pid,
                    "language" => $_COOKIE[LANG]
                ))
                ->select();
            $list[$key]['parent'] = $res[0]['case_sort_name'];
        }
        foreach ($list as $key => $val) {
            $list[$key]['case_spic'] = (strstr($val['case_spic'], "|")) ? explode("|", $val['case_spic']) : array($val['case_spic']);
        }
        $page = $Page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    public function add()
    {
        $this->parent_auth();
        $this->display();
    }

    private function parent_auth()
    {
        $list = $this->db->table('case_sort')->where($this->lang)
            ->order('case_sort_order desc')
            ->select();
        $this->assign('parent_list', $list);
    }

    public function edit()
    {
        $this->parent_auth();
        $arr = $this->get_url_formatting(); // 格式化URL参数。取出表名。查询条件
        $table = $arr["table_name"];
        $where = $arr["where"];
        $column = $arr["column"];
        $vo = $this->db->table($table)
            ->where($where)
            ->find();
        $this->assign('vo', $vo);
        $this->assign('case_path', $vo['case_spic']);
        $this->assign("img_url", explode('|', $vo['case_spic'])); // 图片路径
        $this->display();
    }

    //案例批量上传
    public function case_ajax_upload()
    {
        $this->ajax_upload();
    }
}

?>