<?php
import('Base', 'action');

class AboutAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "about");

        //about
        $about_list = $this->db->table("basic")->where("basic_one_id=44")->order("basic_order desc")->select();
        $this->assign("aboutList", $about_list);
    }

    /**
     * 关于我们
     */
    public function index()
    {

        $res = $this->basic(44);
        $this->assign("current_about_id", 44);
        $this->assign("contact", $res);
        $this->assign("meta", $res);
        $this->display();
    }

    public function dh()
    {
        $config = $this->db->table("web_config")->where("id=1")->find();
        $this->assign("config", $config);
        $this->display();
    }

    /**
     * 联系我们
     */
    public function  contact()
    {
        $res = $this->basic(63);
        $this->assign("contact", $res);


        $this->display();
    }
}

?>