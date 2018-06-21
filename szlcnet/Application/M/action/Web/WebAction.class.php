<?php

/**
 * 网站建设
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/23
 * Time: 15:05
 */
import('Base', 'action');

class WebAction extends BaseAction
{


    public function __construct()
    {
        parent::__construct();

    }

    /**
     * 网站建设
     */
    public function index()
    {
        $this->assign("current", "6");
        $this->assign("noser", true);
        $this->assign("meta", $this->basic(56));
        $this->assign("guest_title", "填写资料,网站建设");
        $this->assign("guest_instructions", "网站建设描述！");
        $this->assign("subject", "微信开发专栏");
        $arr = array(
            'website' => 40,
            'shop' => 41,
            'marketing' => 42,
            'brand' => 43,
            'info' => 44,
            'industry' => 45,
        );
        $this->assign("website", $this->webmsg($arr['website']));
        $this->assign("shop", $this->webmsg($arr['shop']));
        $this->assign("marketing", $this->webmsg($arr['marketing']));
        $this->assign("brand", $this->webmsg($arr['brand']));
        $this->assign("info", $this->webmsg($arr['info']));
        $this->assign("industry", $this->webmsg($arr['industry']));
        $this->display();
    }

    /**
     * 获取指定网站类型的案例，以及描述
     */
    private function webmsg($id)
    {
        $sortInfo = $this->db->table("product_sort")->where("product_sort_id=$id")->find();
        $res = $this->db->query("select * from lc_product where  product_one_id=$id order by product_order desc limit 0,4");
        return array("des" => $sortInfo, "list" => $res);
    }

    /**
     * 创意策划
     */
    public function scheme()
    {
        $arr = array(
            'web_scheme' => 53,
            'product' => 47,
            'brand' => 48,
            'enterprise' => 49,
            'shop' => 50,
            'info' => 51,
            'government' => 52,
        );
        $this->assign("current", 4);
        $this->assign("meta", $this->basic(55));
        $this->assign("guest_title", "填写资料,创意策划");
        $this->assign("guest_instructions", "创意策划专栏描述");
        $this->assign("subject", "创意策划专栏");

        //msg
        $this->assign("web_scheme", $this->webmsg($arr['web_scheme']));
        $this->assign("product", $this->webmsg($arr['product']));
        $this->assign("brand", $this->webmsg($arr['brand']));
        $this->assign("enterprise", $this->webmsg($arr['enterprise']));
        $this->assign("shop", $this->webmsg($arr['shop']));
        $this->assign("info", $this->webmsg($arr['info']));
        $this->assign("government", $this->webmsg($arr['government']));

        $this->display();
    }
}