<?php
import('Base', 'action');


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/23
 * Time: 10:38
 */
class CaseAction extends BaseAction
{
    protected $m;

    public function __construct()
    {
        parent::__construct();
        $this->m = M("Case", '', 'Case');
        $this->assign("current", 5);
    }

    public function index()
    {


        $catgoty = I("get.catgoty");  //分类别名

        if (!$catgoty) {
            $temp = $this->db->table("basic")->where(array("basic_id" => 60))->find();
            $res['basic_seo_title'] = $temp['basic_seo_title'];
            $res['basic_seo_description'] = $temp['basic_seo_description'];
            $res['basic_seo_keyword'] = $temp['basic_seo_keyword'];
            $this->assign("meta", $res);
        }else{
            $temp = $this->db->table("case_sort")->where(array("alias" => $catgoty))->find();
            $res['basic_seo_title'] = $temp['case_seo_title'];
            $res['basic_seo_description'] = $temp['case_seo_description'];
            $res['basic_seo_keyword'] = $temp['case_seo_keyword'];
            $this->assign("meta", $res);
        }

        // 计算总条数。显示分页
        $count = $this->db->table("case")->count('case_id');
        $this->set_list_num(24); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows; // 分页SQL
        if ($catgoty) {
            $this->where = array(
                "case_one_id" => $this->m->get_Catgory_Id($catgoty)
            );
        }
        //case_id
        $list = $this->m->caseList($this->where, 'case_id asc ', $limit);
        $this->assign('page', $Page->show());
        foreach ($list as $key => $val) {
            $list[$key]['case_spic'] = (strstr($val['case_spic'], "|")) ? explode("|", $val['case_spic']) : array($val['case_spic']);
        }
        $this->assign("list", $list);
        $this->assign("case_Catgory", $this->m->catgory());
        $this->display("Case_Index");
    }


    /**
     * 案例详情
     */
    public function  detail()
    {
        $id = I("get.id");
        $res = $res2 = null;
        if ($id && is_numeric($id)) {
            $res = $this->db->table("case")->where("case_id=$id")->find();
            $res2['basic_seo_title'] = $res['case_seo_title'];
            $res2['basic_seo_description'] = $res['case_seo_description'];
            $res2['basic_seo_keyword'] = $res['case_seo_keyword'];
            $this->assign("meta", $res2);
        } else {
            exit('test');
        }
        $this->assign("morderImg", strstr($res['case_spic'], "|") ? true : false);
        $arr = $spic = null;
        if (strstr($res['case_spic'], '|')) {
            $arr = explode("|", $res['case_spic']);
            unset($arr[0]);
            $spic = $arr[1];


        } else {
            $spic = $res['case_spic'];
        }

        // 上一条记录
        $prev = $this->db->table('case')
            ->where("case_id <" . ($id - 1))
            ->limit(0, 1)
            ->select();

        // 下一条记录
        $next = $this->db->table('case')
            ->where("case_id >" . ($id + 1))
            ->limit(0, 1)
            ->select();

        $this->assign('prev', $prev != null && (count($prev)) ? $id - 1 : null);
        $this->assign('next', $next != null && (count($next)) ? $id + 1 : null);


        $this->assign("spic", $spic);
        $this->assign("spicArr", $arr);
        $this->assign("case_detail", $res);
        $this->display();
    }
}