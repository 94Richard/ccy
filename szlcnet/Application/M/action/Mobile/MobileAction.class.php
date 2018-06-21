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

    public function index()
    {
        $this->display();
    }


}