<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/27
 * Time: 10:03
 */
import('Base', 'action');
class ContactusAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "8");
    }

    public function index()
    {
		$res=$this->db->table("basic")->where("basic_id=45")->find();
		$this->assign("res",$res);
        $this->assign("meta", $this->basic(45));
        $this->display();
    }
}