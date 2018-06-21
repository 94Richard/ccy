<?php
import('Admin', 'action');

class BasicAction extends AdminAction
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "basic";
        $this->id = "basic_id";
        $this->assign("id", "basic_id"); // URL传值列名
        $this->assign('tableName', "basic"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
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
            if ($this->search_where['basic_one_id'][1] == 0) {
                unset($this->search_where['basic_one_id']);
            }
            $this->assign('search_where', $this->search_value);
        }

        if ($_GET['do'] == 'back') { // 添加或者编辑完成后返回
            $this->search_where['basic_one_id'] = $_GET['basic_one_id'];
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
            ->order('basic_order desc')
            ->limit($limit)
            ->select();
        foreach ($list as $key => $val) {
            $pid = $val['basic_one_id']; // 分类ID
            $res = $this->db->table('basic_sort')
                ->where(array(
                    "basic_sort_id" => $pid,
                    "language" => $_COOKIE[LANG]
                ))
                ->select();
            $list[$key]['parent'] = $res[0]['basic_sort_name'];
        }
        $page = $Page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();


    }

    public function edit()
    {
        $this->parent_auth();
        parent::edit();
    }

    public function add()
    {
        $this->parent_auth();
        $this->display();
    }

    private function parent_auth()
    {
        $list = $this->db->table('basic_sort')->where($this->lang)
            ->order('basic_sort_order desc')
            ->select();
        $this->assign('parent_list', $list);
    }
}

?>