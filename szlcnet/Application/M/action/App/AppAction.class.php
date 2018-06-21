<?php
import('Base', 'action');

class AppAction extends BaseAction
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
     * App应用
     */
    public function index()
    {

        $this->display();
    }

}

?>