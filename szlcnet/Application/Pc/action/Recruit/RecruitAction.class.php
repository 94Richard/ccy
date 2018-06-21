<?php

/**
 *人才招聘
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/16
 * Time: 10:01
 */
import('Base', 'action');

class RecruitAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "6");
    }

    public function  index()
    {
        $list = $this->db->table("recruitment")->order("id desc")->select();
        $this->assign("list", $list);
        $this->assign("meta", $this->basic(62));
        $this->display();
    }

    public function  detail()
    {
        $id = I("get.id");
        if (isset($id) && $id != 0) {
            $list = $this->db->table("recruitment")->where("id=$id")->find();
            if ($list != null && count($list)) {
                $res = $this->db->table("recruitment_sort")->where("id=" . $list['id'])->find();
                $list['department'] = $res['sort_name'];
            }
            $this->assign("vo", $list);
        }
        $this->assign("recruit_spic", RECRUIT_DIR);
        $this->assign("production_spic", PRODUCTION_SPIC);

        $this->display();
    }

    //简历上传 doc,docx
    public function ajax_upload($file_type = 'Image')
    {
        parent::ajax_upload("doc");
    }

    //个人作品上传,压缩包
    public function production_upload($file_type = 'Image')
    {
        parent::ajax_upload("compression");
    }

    //简历投递
    public function submit_resume()
    {
        extract($_GET);
        if (!isset($user)) {
            $this->error("请输入姓名，以方便我们联系到您!");
        }
        if (!isset($tel)) {
            $this->error("联系电话不正确!");
        }
        if (!isset($email) || !$this->regex($email, 'email')) {
            $this->error("请输入正确的邮箱地址!");
        }
        if (!isset($resume_doc)) {
            $this->error("请上传简历!");
        }
        if (!isset($production)) {
            $this->error("请上传简历!");
        }
        //$this->printInfo($_GET);
        $table = 'resume';
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
            if (isset($_GET[$k]) && !is_array($_GET[$k])) {
                $data[$k] = trim($_GET[$k]);
            }
        }
        // 进行插入
        $result = $this->db->table($table)
            ->data($data)
            ->insert();

        //发送邮件
        if ($result && $_GET['job']) {
            //查询职位
            $recruitment = $this->db->table("recruitment")->where("id = " . $_GET['job'])->find();
            $job_name = $recruitment['job'];

            //查询部门
            $department = $this->db->table("recruitment_sort")->where("id = " . $recruitment['sort_id'])->find();
            require_once('smtp/PHPMailer/phpmailer.class.php');
            if ($department) {
                $mail = new PHPMailer(); // 实例化
                $mail->IsSMTP(); // 启用SMTP
                $mail->Host = "smtp.163.com"; // SMTP服务器 以163邮箱为例子
                $mail->Port = 25; // 邮件发送端口
                $mail->SMTPAuth = true; // 启用SMTP认证
                $mail->CharSet = "UTF-8"; // 字符集
                $mail->Encoding = "base64"; // 编码方式
                $mail->Username = "qq1752115084@163.com"; // 你的邮箱
                $mail->Password = "admin888"; // 你的密码
                $mail->From = "qq1752115084@163.com"; // 发件人地址（也就是你的邮箱）
                $title = " 【创驰云官网】" . $user;
                $mail->Subject = "(szlcnet.com)申请公司" . $job_name . "（深圳）－" . $user;; // 邮件标题
                $mail->FromName = $title; // 发件人姓名
                $address = $department['email']; // 根据岗位不同，发往不同的部门邮箱
                $mail->AddAddress($address, "简历投递"); // 添加收件人（地址，昵称）
                $content = file_get_contents($this->url . "Recruit/show/id/$result");

                $this->printInfo($this->url . "Recruit/show/id/$result");
                $mail->Body = $content;
                $mail->IsHTML(true); // 支持html格式内容
                $mail->Send();
                $this->success("提交成功!");
            }
        }
        $this->error("简历提交失败!");
    }

    /**
     * mail简历远程加载
     */
    public function show()
    {
        $id = I("get.id");
        if (isset($id) && $id != 0) {
            $res = $this->db->table("resume")->where("id = $id")->find();
            //查询当前职位的部门邮箱
            $department = $this->db->table("recruitment_sort")->where("id = " . $res['job'])->find();
            if ($res != null && count($res) && $department) {
                //查询所属部门
                $res['department'] = $department['sort_name'];
                $this->assign("vo", $res);
                $this->display();
            }
        }
        $this->display("Recruit_400");
    }

}