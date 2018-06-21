<?php

/**
 * 推广
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/27
 * Time: 11:55
 */
import('Base', 'action');

class ExtensionAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", 2);
    }

    /**
     * G3云
     */
    public function index()
    {
        $this->assign("guest_title", "马上免费体验G3云推广");
        $this->assign("guest_instructions", "创驰云网络特别推出限量体验级网络推广产品，马上体验吧！");
        $this->assign("subject", "G3云推广");
        $this->assign("meta", $this->basic(52));
        $this->display();
    }

    /**
     * 赛富通
     */
    public function safton()
    {
        $this->assign("guest_title", "马上免费体验赛富通");
        $this->assign("guest_instructions", "创驰云网络特别推出限量体验级网络推广产品，马上体验吧！");
        $this->assign("subject", "赛富通");
        $this->assign("meta", $this->basic(53));
        $this->display();
    }
}