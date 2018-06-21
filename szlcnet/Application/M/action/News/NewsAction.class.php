<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30
 * Time: 14:36
 */
import('Base', 'action');

class NewsAction extends BaseAction
{
    private $listId;

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "0");
        //查询分类
        $newsList = $this->db->table("news_sort")->order(" news_sort_order desc")->select();
        $this->assign("news_list", $newsList);
        $this->listId = I("get.newslist");
        $this->assign("curren_news", ($this->listId != null && is_numeric($this->listId)) ? $this->listId : null);
    }

    public function index()
    {
        $listId = $this->listId;
        $where = ($listId != null && is_numeric($listId)) ? "parent_id=$listId" : "1=1";
        //分页
        $count = $this->db->table("news")->where($where)->count();
        import('Page');
        $Page = new Page($count, 10);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $res = $this->db->table('news')->where($where)
            ->order('news_order desc')
            ->limit($limit)
            ->select();

        //查询新闻
        foreach ($res as $key => $val) {
            $dataArr = explode(":", date('Y-m:d', strtotime($val['news_date'])));
            $res[$key] ['day'] = $dataArr[1];
            $res[$key] ['news_date'] = $dataArr[0];
        }
        // $this->printInfo($res);
        $this->assign("newslist", $res);
        $page = $Page->show();
        $this->assign('page', $page);
        $this->display();
    }


    public function detail()
    {
        $id = i("get.id");
        $res = $this->db->table("news")->where("news_id=$id")->find();
        if ($res && count($res)) {
            $parent = $this->db->table("news_sort")->where("news_sort_id=" . $res['parent_id'])->find();
            $this->assign("parent", $parent);
            $this->assign("curren_news", $parent['news_sort_id']);
        } else {
            exit();
        }
        // 上一条记录
        $prev = $this->db->table('news')
            ->where("news_id <" . ($id - 1) . " and news_id!=$id")
            ->limit(0, 1)
            ->select();

        // 下一条记录
        $next = $this->db->table('news')
            ->where("news_id >" . ($id + 1), " and news_id!=$id")
            ->limit(0, 1)
            ->select();


        $this->assign('prev', $prev != null ? $id - 1 : null);
        $this->assign('next', $next != null ? $id + 1 : null);
        $this->assign("detail", $res);
        $this->display();
    }
}