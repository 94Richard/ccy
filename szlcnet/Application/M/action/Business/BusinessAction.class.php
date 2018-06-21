<?php

/**
 * 基础业务
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/3
 * Time: 17:28
 */
import('Base', 'action');
class BusinessAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "about");
    }

    public function index()
    {
        $val = I('get');
        $this->display();
    }

    /**
     * 金牌邮局
     */
    public function mail()
    {
        $this->display();
    }
}