<?php

/**
 * 会员管理-与内部CRM关联
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/20
 * Time: 14:45
 */
import('Base', 'action');

class MemberAction extends BaseAction
{
    private $success_code = 100;
    private $erro_code = 101;

    public function __construct()
    {
        parent::__construct();
        //  $this->assign("current", "1");
    }

    public function index()
    {
        $this->display();
    }

    /**
     * token检验
     */
    private function check_token()
    {
        if (!isset($_POST['token']))
            $this->error("token为空!", $this->erro_code);
        $token = $this->db->table("token")->where("id=1")->find();

        if ($token == null || !count($token) || ($_POST['token'] != $token['token']))
            $this->error("token验证不通过!", $this->erro_code);
    }

    /**
     * 注册会员-外部接口调用 (lc_members)
     *  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
     * `LoginAccount` varchar(50) DEFAULT NULL COMMENT '登录账号',
     * `LoginPassword` varchar(50) DEFAULT NULL COMMENT '登录密码',
     * `Name` varchar(50) DEFAULT NULL COMMENT '名称',
     * `Address` varchar(100) DEFAULT NULL COMMENT '地址',
     * `ContactUser` varchar(20) DEFAULT NULL COMMENT '联系人',
     * `Dept` varchar(50) DEFAULT NULL COMMENT '所属部门',
     * `Tel` varchar(20) DEFAULT NULL COMMENT '固定电话',
     * `Mobile` varchar(11) DEFAULT NULL COMMENT '手机号',
     * `Fax` varchar(20) DEFAULT NULL COMMENT '传真号',
     * `Email` varchar(50) DEFAULT NULL COMMENT '电子邮件',
     * `WebUrl` varchar(50) DEFAULT NULL COMMENT '企业网站',
     * `WebTestUrl` varchar(50) DEFAULT NULL COMMENT '测试地址',
     * `Status` int(11) DEFAULT NULL COMMENT '状态',
     * `ConsumerType` varchar(50) DEFAULT NULL COMMENT '客户类型',
     * `Remarks` varchar(2000) DEFAULT NULL COMMENT '备注',
     * `Creator` varchar(50) DEFAULT NULL COMMENT '创建人',
     * `CreateDate` datetime DEFAULT NULL COMMENT '创建时间'
     */
    public function registerMeber()
    {
        $this->check_token();
        $table = 'members';
        $columns = array(
            'LoginAccount',
            'LoginPassword',
            'Name',
            'Dept',
            'ContactUser',
            'Creator',
            'Status',
            'Address',
        );
        // 进行插入
        $result = @$this->db->table($table)
            ->data($this->dispose_api_data($table, $columns))
            ->insert();
        if ($result > 0) {
            $this->success("会员录入成功!", $this->success_code);
        } else {
            $this->error("会员录入失败!", $this->erro_code);
        }
    }

    /**
     * 接口数据统一处理，返回键值对数据
     */
    private function dispose_api_data($table, $columns = null)
    {
        // 数据库字段
        $query = $this->db->query('SHOW COLUMNS FROM ' . DB_PREFIX . $table);
        $result = $this->db->getAll($query);
        $fields = array();
        foreach ($result as $v) {
            $fields[] = $v['Field'];
        }
        $data = array();
        unset($fields[0]); // 剔除主键

        if ($columns == null) {
            foreach ($fields as $k) {
                if (!isset($_POST[$k]))
                    $this->error($k . '字段不能为空!', $this->erro_code);
            }
        } else {
            $temp = '';
            foreach ($columns as $key => $val) {
                echo $val . '-';
                if (!isset($_POST[$val]))
                    $temp = $key;
            }
            $this->printInfo($_POST);
            if ($temp != '')
                $this->error($columns[$temp] . '字段不能为空!', $this->erro_code);

        }

        foreach ($fields as $k) {
            if (isset($_POST[$k]) && !is_array($_POST[$k])) {
                $data[$k] = trim($_POST[$k]);
            }
        }
        return $data;

    }

    /**
     * 订单数据录入- 外部接口
     * OrderNo` varchar(20) DEFAULT NULL COMMENT '订单流水号',
     * `MemberId` int(11) DEFAULT NULL COMMENT '客户ID',
     * `PackageType` int(11) DEFAULT NULL COMMENT '套餐类型',
     * `PackageName` varchar(200) DEFAULT NULL COMMENT '套餐名称',
     * `PackageRemarks` varchar(500) DEFAULT NULL COMMENT '套餐备注',
     * `FTPAccount` varchar(50) DEFAULT NULL COMMENT 'FTP账号',
     * `FTPPassword` varchar(50) DEFAULT NULL COMMENT 'FTP密码',
     * `SEOAccount` varchar(50) DEFAULT NULL COMMENT 'SEO用户名',
     * `SEOPassword` varchar(50) DEFAULT NULL COMMENT 'SEO密码',
     * `OrderSignDate` datetime DEFAULT NULL COMMENT '签单日期',
     * `PayStatus` int(11) DEFAULT NULL COMMENT '支付状态',
     * `OrderTotalMoney` decimal(8,2) DEFAULT NULL COMMENT '签单总额',
     * `PaidMoney` decimal(8,2) DEFAULT NULL COMMENT '已付金额',
     * `SurplusMoney` decimal(8,2) DEFAULT NULL COMMENT '剩余金额',
     * `StartDate` datetime DEFAULT NULL COMMENT '开始日期',
     * `EndDate` datetime DEFAULT NULL COMMENT '到期日期',
     * `SignUser` int(11) DEFAULT NULL COMMENT '签单人',
     * `OrderType` int(11) DEFAULT NULL COMMENT '订单类型',
     * `OrderStatus` int(11) DEFAULT NULL COMMENT '订单状态',
     * `DeliveryDate` datetime DEFAULT NULL COMMENT '交付日期',
     * `SEOKeyword` varchar(500) DEFAULT NULL COMMENT '优化关键字',
     * `PrincipalUser` varchar(500) DEFAULT NULL COMMENT '项目负责人',
     * `IsBuyDomain` int(11) DEFAULT NULL COMMENT '是否购买域名',
     * `IsSpecialApproval` int(11) DEFAULT NULL COMMENT '是否上级特批',
     * `Remarks` varchar(2000) DEFAULT NULL COMMENT '备注',
     * `Operator` varchar(50) DEFAULT NULL COMMENT '操作人',
     * `OperateDate` datetime DEFAULT NULL COMMENT '操作时间',
     */
    public function orderEntering()
    {
        $this->check_token();
        $table = 'orders';
        $columns = array(
            'MemberId',
            'PackageType',
            'PackageName',
            'FTPAccount',
            'FTPPassword',
            'OrderSignDate',
            'OrderTotalMoney',
            'PaidMoney',
            'SurplusMoney',
            'StartDate',
            'EndDate',
            'SignUser',
            'OrderType',
            'OrderStatus',
            'DeliveryDate',
            'PrincipalUser',
            'IsBuyDomain',
            'IsSpecialApproval',
            'Operator',
            'OperateDate',
        );
        // 进行插入
        $result = @$this->db->table($table)
            ->data($this->dispose_api_data($table, $columns))
            ->insert();
        if ($result > 0) {
            $this->success("订单录入成功!", $this->success_code);
        } else {
            $this->error("订单录入失败!", $this->erro_code);
        }
    }

    /**
     * 订单工作流
     */
    public function orderWorkFlow()
    {
        $this->check_token();
        $table = 'orderworkflow';
        $result = @$this->db->table($table)
            ->data($this->dispose_api_data($table))
            ->insert();
        if ($result > 0) {
            $this->success("订单录入成功!", $this->success_code);
        } else {
            $this->error("订单录入失败!", $this->erro_code);
        }
    }

    /**
     * 订单工作流程安排
     */
    public function orderWorkFlowSchedule()
    {
        $this->check_token();
        $table = 'orderworkflow';
        $result = @$this->db->table($table)
            ->data($this->dispose_api_data($table))
            ->insert();
        if ($result > 0) {
            $this->success("订单工作流程安排录入成功!", $this->success_code);
        } else {
            $this->error("订单工作流程安排录入失败!", $this->erro_code);
        }
    }
}