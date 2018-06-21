<?php

/**
 * 留言
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/6
 * Time: 9:09
 */
import('Base', 'action');

class MsgAction extends BaseAction
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * g3、赛富通留言
     */
    public function extensionMsg()
    {
        extract($_POST);
        if (!isset($company) || !$company) {
            $this->error("请输入公司名称!");
        }
        if (!isset($phone) || !preg_match('/^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)|([0-9]{3,4}\-))?([0-9]{7,8})(\-[0-9]+)?$/ ', $phone)) {
            $this->error("请输入您的联系电话!" . $phone);
        }
        if (!isset($product) || !$product) {
            $this->error("请输入您公司的主营产品项目!");
        }
        if (!isset($email) || !$this->regex($email, 'email')) {
            $this->error("请输入正确的邮箱地址!");
        }
        if (!isset($tel) || $this->regex($tel, "phone")) {
            $this->error("请输入正确的电话号码");
        }
        if (!isset($name)) {
            $this->error("请输入姓名，以方便我们联系到您!");
        }

        $table = 'message';
        // 数据库字段
        $query = $this->db->query('SHOW COLUMNS FROM ' . DB_PREFIX . $table);
        $result = $this->db->getAll($query);
        $fields = array();
        foreach ($result as $v) {
            $fields[] = $v['Field'];
        }
        $data = array();
        unset($fields[0]); // 剔除主键

        foreach ($fields as $k) {
            if (isset($_POST[$k]) && !is_array($_POST[$k])) {
                $data[$k] = trim($_POST[$k]);
            }
        }
        // 进行插入
        $result = $this->db->table($table)
            ->data($data)
            ->insert();
        if ($result > 0) {
            $this->success("留言提交成功!");
        } else {
            $this->error("留言提交失败!");
        }

    }
}