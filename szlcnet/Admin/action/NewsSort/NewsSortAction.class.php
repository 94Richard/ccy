<?php
import('Admin', 'action');

class NewsSortAction extends AdminAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "news_sort_id"); // URL传值列名
        $this->assign('tableName', "news_sort"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
    }

    public function index()
    {
        $info = $this->db->table("news_sort")->where($this->lang)->select();
        $this->assign("list", $info);
        $this->display();
    }
}

?>