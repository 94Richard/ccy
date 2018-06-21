<?php

/**
 * 营销型网站
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/27
 * Time: 11:55
 */
import('Base', 'action');

class MarketingAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "1");
    }

    public function index()
    {
        $this->assign("meta", $this->basic(54));
        $this->assign("guest_title", "填写资料，定制最适合您公司的营销方案");
        $this->assign("guest_instructions", "创驰云网络特别推出限量体验级网络营销应用产品，马上体验吧！");
        $this->assign("subject", "营销型网站专栏");

        $this->display();
    }
}