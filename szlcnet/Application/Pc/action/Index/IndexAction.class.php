<?php
import('Base', 'action');

class IndexAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "0");
    }

    public function index()
    {
        $temp = $this->webConfig;
        $res['basic_seo_title'] = $temp['web_title'];
        $res['basic_seo_description'] = $temp['web_description'];
        $res['basic_seo_keyword'] = $temp['web_keywords'];
        $this->assign("meta", $res);
        //banner
        $banner = $this->db->table("banner")->where("parent_id=2")->order("banner_order desc")->select();
        $this->assign("banner", $banner);

        //customer
        $customer = $this->db->query("SELECT * from lc_product where product_one_id=38 order by product_order desc  limit 0,10");
        $this->assign("customer", $customer);

        $where = ' 1=1';
        //recommend newsImg
        $recommend_newImg =
            $this->db->table('news')->where("news_commend=1 and news_spic !=''")->order('news_order desc')
                ->find();
        $this->assign("topNews", $recommend_newImg);

        if (count($recommend_newImg)) {
            $where = "news_id !=" . $recommend_newImg['news_id'];
        }
        //recommend new
        $news = $this->db->query("SELECT * from lc_news where  news_commend=1 and parent_id<>10  order by news_order  desc , news_id DESC limit 0,3");
        $this->assign("recommended_news", $news);


        //Assign_news new
        $news = $this->db->query("SELECT * from lc_news where  news_commend=1 and parent_id=10  order by news_order  desc , news_id DESC limit 0,3");
        $this->assign("Assign_news", $news);


        //case
        $list = $this->db->table("case")->where("case_commend=1")->limit(0, 16)->select();
        foreach ($list as $key => $val) {
            $list[$key]['case_spic'] = (strstr($val['case_spic'], "|")) ? explode("|", $val['case_spic']) : array($val['case_spic']);
        }
        $this->assign("recommend_case_1", $list);
        $this->assign("recommend_case_2", $list);
        $this->display("Index_index");
    }
}

?>