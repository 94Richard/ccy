<?php
import('Admin', 'action');

class BasicSortAction extends AdminAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "basic_sort_id"); // URL传值列名
        $this->assign('tableName', "basic_sort"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
    }

    public function index()
    {
        $info = $this->db->table("basic_sort")->where($this->lang)->select();
        foreach ($info as $key => $val) {
            $pid = $val['parent_id']; // 分类ID
            $res = $this->db->table('basic_sort')
                ->where(array(
                    "basic_sort_id" => $pid,
                    "language" => $_COOKIE[LANG]
                ))
                ->select();
            if ($res == null) {
                $info[$key]['parent'] = '无';
            } else {
                $info[$key]['parent'] = $res[0]['basic_sort_name'];
            }
        }
        $this->assign("list", $info);
        $this->display();
    }

    private function parent_auth()
    {
        $list = $this->db->table('basic_sort')->where($this->lang)
            ->order('basic_sort_order desc')
            ->select();
        $this->assign('parent_list', $list);
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

?>