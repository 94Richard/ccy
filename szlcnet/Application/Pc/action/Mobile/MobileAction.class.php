<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1
 * Time: 8:33
 */
import('Base', 'action');

class MobileAction extends BaseAction
{
    public function __construct()
    {
        parent::__construct();
        $this->assign("current", 3);
    }

    /**
     * 手机网站
     */
    public function index()
    {
        $this->assign("meta", $this->basic(47));
        $this->assign("guest_title", "不容错过的移动网络商机，你还在犹豫什么");
        $this->assign("guest_instructions", "马上体验吧！");
        $this->assign("subject", "手机网站");
        $this->display();
    }

    /**
     * 微信开发
     */
    public function  weixin()
    {
        $this->assign("meta", $this->basic(48));
        $this->assign("guest_title", "创驰云网络，专业微信开发！");
        $this->assign("guest_instructions", "创驰云网络特别推出限量体验级微信开发产品，马上体验吧！");
        $this->assign("subject", "微信定制开发");

        $this->display();
    }

    /**
     * app开发
     */
    public function apps()
    {
        $this->assign("meta", $this->basic(48));
        $this->assign("guest_title", "专业APP开发商，您的优质选择！");
        $this->assign("guest_instructions", "创驰云网络特别推出限量体验级APP应用产品，马上体验吧！");
        $this->assign("subject", "app应用");

        $this->display();
    }

}