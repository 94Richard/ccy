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
        $this->assign("meta", $this->basic(45));
        $this->display();
    }
}