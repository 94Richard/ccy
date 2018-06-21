<?php

/**
 * 部门管理
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/18
 * Time: 10:31
 */
import('Admin', 'action');

class RecruitmentSortAction extends AdminAction
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "recruitment_sort";
        $this->id = "id";
        $this->assign("id", $this->id); // URL传值列名
        $this->assign('select_option', "edit");
        $this->assign('tableName', $this->table_name); // 分配到模板URL。删除的表名称。
    }

    public function index()
    {
        $list = $this->db->table($this->table_name)->where($this->lang)
            ->select();
        $this->assign("list", $list);
        $this->display();
    }

}