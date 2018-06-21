<?php
import('Admin', 'action');

class BannerSortAction extends AdminAction
{
    private $children_f = 1;

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "banner_sort_id"); // URL传值列名
        $this->assign('tableName', "banner_sort"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
    }

    public function get_children()
    {
        return $this->children_f;
    }

    protected function _after_delete($id)
    { // 父亲删除了，孩子也一起删除
        $where ['pid'] = $id;
        $this->db->table('banner_sort')->where($where)->delete();
    }

    public function index()
    {
        $list = $this->db->table('banner_sort')->order('banner_sort_order desc')->select();
        $list = list_to_tree($list); // 转换成Tree
        $this->assign('list', $list);
        $this->display();
    }

    public function add()
    {
        $this->display();
    }

    public function edit()
    {
        parent::edit();
    }

}

?>