<?php

/**
 * 简历中心
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/18
 * Time: 10:31
 */
import('Admin', 'action');

class ResumeAction extends AdminAction
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "resume";
        $this->id = "id";
        $this->assign("id", $this->id); // URL传值列名
        $this->assign('tableName', $this->table_name); // 分配到模板URL。删除的表名称。
    }

    public function index()
    {
        $list = $this->db->table($this->table_name)->where($this->lang)
            ->select();

        foreach ($list as $key => $val) {
            //查询的求职岗位
            $job = $this->db->table("recruitment")->where("id=" . $val['job'])->find();
            $list[$key]['job'] = $job['job'];
        }
        $this->assign("list", $list);
        $this->display();
    }

}