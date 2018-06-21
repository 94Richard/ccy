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

        // 计算总条数。显示分页
        $count = $this->db->table("case")->count('case_id');
        $this->set_list_num(20); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows; // 分页SQL
        if ($catgoty) {
            $this->where = array(
                "case_one_id" => $this->m->get_Catgory_Id($catgoty)
            );
        }
        $list = $this->m->caseList($this->where, 'case_commend desc ', $limit);
        $this->assign('page', $Page->show());
        foreach ($list as $key => $val) {
            $list[$key]['case_spic'] = (strstr($val['case_spic'], "|")) ? explode("|", $val['case_spic']) : array($val['case_spic']);
        }

        $this->assign("list", $list);
        $this->assign("case_Catgory", $this->m->catgory());

        $this->display();
    }


    /**
     * 案例详情
     */
    public function  detail()
    {
        $id = I("get.id");
        $res = null;
        if ($id && is_numeric($id)) {
            $res = $this->db->table("case")->where("case_id=$id")->find();
        } else {
            exit();
        }

        $this->assign("morderImg", strstr($res['case_spic'], "|") ? true : false);

        $arr = null;
        $spic = null;
        if (strstr($res['case_spic'], '|')) {
            $arr = explode("|", $res['case_spic']);
            $spic = $arr[0];
            // unset($arr[0]);

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