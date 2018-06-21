<?php

/**
 * 职位管理
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/18
 * Time: 10:31
 */
import('Admin', 'action');

class RecruitmentAction extends AdminAction
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "recruitment";
        $this->id = "id";
        $this->assign("id", $this->id); // URL传值列名
        $this->assign('select_option', "edit");
        $this->assign('tableName', $this->table_name); // 分配到模板URL。删除的表名称。
    }

    private function parent_auth()
    {
        $list = $this->db->table("recruitment_sort")->where($this->lang)
            ->select();
        $this->assign('parent_list', $list);

    }

    public function index()
    {
        $this->parent_auth();
        $table = $this->get_table();
        if ($_GET['do'] == 'search') { // 查询
            $this->_search();
            $this->search_where = $_SESSION['search_where'];
            $this->search_value = $_SESSION['search_value'];
            //如果分类为0，则移除
            if ($this->search_where['sort_id'][1] == 0) {
                unset($this->search_where['sort_id']);
            }
            $this->assign('search_where', $this->search_value);
        }

        if ($_GET['do'] == 'back') { // 添加或者编辑完成后返回
            $this->search_where['sort_id'] = $_GET['parent_id'];
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
            ->order('end_time desc')
            ->limit($limit)
            ->select();
        foreach ($list as $key => $val) {
            $pid = $val['sort_id']; // 分类ID
            $res = $this->db->table('recruitment_sort')
                ->where(array(
                    "id" => $pid,
                    "language" => $_COOKIE[LANG]
                ))
                ->select();
            $list[$key]['parent'] = $res[0]['sort_name'];
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
        parent::add();
    }
}