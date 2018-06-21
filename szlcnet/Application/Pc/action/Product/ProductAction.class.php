<?php
/**
 * 配套产品
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1
 * Time: 17:26
 */
import('Base', 'action');

class ProductAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "6");
    }

    /**
     * 全景展示
     */
    public function panorama()
    {
        $this->assign("meta", $this->basic(50));
        $this->assign("guest_title", "360度全新视角");
        $this->assign("guest_instructions", "全景邀请你一起感受品牌的魅力，打造属于您的企业的专属形象！");
        $this->assign("subject", "全景展示专栏!");
        $this->display();
    }

    /**
     * 系统定制
     */
    public function systemExploit()
    {
        $this->assign("meta", $this->basic(51));
        $this->assign("guest_title", "开天辟地，为您设计");
        $this->assign("guest_instructions", "融科技和艺术于一体，助您开辟新天地！");
        $this->assign("subject", "系统定制专栏!");
        $this->display();
    }


}