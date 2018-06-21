<?php
import('Base', 'action');

class AboutAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "about");

        //about

        $w = (APP == 'Pc') ? ' and basic_id!=63 ' : '';

        $about_list = $this->db->table("basic")->where("basic_one_id=44 {$w} ")->order("basic_order desc")->select();


        $this->assign("aboutList", $about_list);
    }

    /**
     * 关于我们
     */
    public function index()
    {
        $val = I('get');
        $res = $this->basic(44);
        $this->assign("current_about_id", 44);
        $this->assign("contact", $res);
        $this->assign("meta", $res);
        $this->display();
    }

    /**
     * 支付方式
     */
    public function Payment()
    {
        $res = $this->basic(46);
        $this->assign("current_about_id", 46);
        $this->assign("meta", $res);

        //查询支付方式
        $backList = $this->db->table("product")->where("product_one_id=37")->limit(0, 8)->order("product_order desc")->select();
        $this->assign("backList", $backList);
        $this->display();
    }

    /**
     * 团队介绍
     */
    public function  team()
    {
        $res = $this->basic(58);
        $this->assign("current_about_id", 58);
        $this->assign("meta", $res);
        $this->assign("team", $res);

        $this->display();
    }

    /**
     *联系我们
     */
    public function contact()
    {
        $this->assign("current_about_id", 45);
        $res = $this->db->table("basic")->where("basic_id=45")->find();
        $this->assign("res", $res);
        $this->assign("meta", $this->basic(45));
        $this->display();

    }
}

?>