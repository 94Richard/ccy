<?php
import('Admin', 'action');

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/13
 * Time: 16:32
 */
class MemberAction extends AdminAction
{

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "member";
        $this->assign("id", "id"); // URL传值列名
        $this->assign('tableName', "member"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
        $this->assign("tab","member");
    }

    public function index()
    {

        $table = $this->get_table();
        if ($_GET['do'] == 'search') { // 查询
            $this->_search();
            $this->search_where = $_SESSION['search_where'];
            $this->search_value = $_SESSION['search_value'];
            $this->assign('search_where', $this->search_value);
        }
        $count = $this->db->table($table)
            ->where($this->search_where)
            ->count($this->id);

        if ($count == 0)
            $this->display();
        import('Page');
        $this->set_list_num(1); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $list = $this->db->table($this->table_name)->where($this->search_where)
            ->limit($limit)
            ->select();
        $page = $Page->show();

        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }


    public function update()
    {

    }
}