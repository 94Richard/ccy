<?php
import('Admin', 'action');

class NewsAction extends AdminAction
{

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "news";
        $this->id = "news_id";

        $this->assign("id", "news_id"); // URL传值列名
        $this->assign('tableName', "news"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");

        $this->assign("upload_dir", NEWS_DIR);
        $this->assign("commed_size", ""); // 上传文件推荐的尺寸
        $this->assign("file_name", "news_spic"); // 隐藏上传文本域的名称。用于上传
    }

    private function parent_auth()
    {
        $list = $this->db->table('news_sort')->where($this->lang)
            ->order('news_sort_id desc')
            ->select();
        $this->assign('list', $list);
        $this->assign('parent_list', $list);

    }

    public function add()
    {
        $this->parent_auth();
        $this->display();
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
            if ($this->search_where['parent_id'][1] == 0) {
                unset($this->search_where['parent_id']);
            }
            $this->assign('search_where', $this->search_value);
        }

        if ($_GET['do'] == 'back') { // 添加或者编辑完成后返回
            $this->search_where['parent_id']=$_GET['parent_id'];
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
            ->order('news_order desc')
            ->limit($limit)
            ->select();
        foreach ($list as $key => $val) {
            $pid = $val['parent_id']; // 分类ID
            $res = $this->db->table('news_sort')
                ->where(array(
                    "news_sort_id" => $pid,
                    "language" => $_COOKIE[LANG]
                ))
                ->select();
            $list[$key]['parent'] = $res[0]['news_sort_name'];
        }
        $page = $Page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
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
        $this->assign("img_url", $vo['news_spic']); // 图片路径
        parent::edit();
    }
}

?>