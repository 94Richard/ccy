<?php
import('Base', 'action');

class SchemeAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "about");


    }


    public function index()
    {

        $this->display();
    }


}

?>