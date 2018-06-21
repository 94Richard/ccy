<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/2
 * Time: 14:10
 */
import('Base', 'action');
class CustomizationAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "1");
    }

    public function index()
    {
        $this->display();
    }

}