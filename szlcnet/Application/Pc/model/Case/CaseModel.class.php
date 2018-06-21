<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/25
 * Time: 11:06
 */
import('', 'model');

class CaseModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function catgory()
    {
        return $this->db->table("case_sort")->select();
    }

    public function caseList($where = '',$order='',$limit)
    {
        return $this->db->table("case")->where($where)->order()->limit($limit)->select();
    }

    /**
     *通过别名或者ID获取单项数据
     */
    public function getItem($alins)
    {
        return $this->db->table("case_sort")->where("alias='" . $alins . "'")->find();
    }

    public function get_Catgory_Id($alins)
    {
        $res = $this->getItem($alins);
        return ($res != null && count($res)) ? $res['case_sort_id'] : null;
    }

}