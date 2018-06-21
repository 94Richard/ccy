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
        //banner
        $banner = $this->db->table("banner")->where("parent_id=2")->order("banner_order desc")->select();
        $this->assign("banner", $banner);

        //新闻
        $news = $this->db->table("news")->where("news_commend=1")->order("news_date desc")->limit(4)->select();
        $this->assign("news", $news);

        //常见问题
        $cjwt = $this->db->table("news")->where("news_commend=1")->order("news_date desc")->limit(3)->select();
        $this->assign("cjwt", $cjwt);

        //customer
        $customer = $this->db->table("product")->where("product_one_id=38")->order("product_order desc")->limit(0, 10)->select();
        $this->assign("customer", $customer);

        $where = ' 1=1';
        //recommend newsImg
        $recommend_newImg = $this->db->table('news')->where("news_commend=1 and news_spic !=''")
            ->order('news_order desc')
            ->find();
        $this->assign("topNews", $recommend_newImg);

        if (count($recommend_newImg)) {
            $where = "news_id !=" . $recommend_newImg['news_id'];
        }
        //recommend new
        $news = $this->db->table('news')->where("news_commend=1 and $where")
            ->order('news_order desc')
            ->limit(0, 4)
            ->select();
        $this->assign("recommended_news", $news);

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