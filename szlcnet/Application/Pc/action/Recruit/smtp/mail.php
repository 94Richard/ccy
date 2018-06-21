<?php
/**
 * +----------------------------------------------------------
 * 功能：系统邮件发送函数
 * +----------------------------------------------------------
 *
 * @param string $to
 *            接收邮件者邮箱
 * @param string $name
 *            接收邮件者名称
 * @param string $subject
 *            邮件主题
 * @param string $body
 *            邮件内容
 * @param string $attachment
 *            附件列表
 *            +----------------------------------------------------------
 * @return boolean +----------------------------------------------------------
 */
require_once('PHPMailer/phpmailer.class.php');

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


$user = $_POST['user'];
$msg = $_POST['msg'];

$title = $_POST['user'] . " (来自网站http://www.starbea.net/的留言)";

$mail->Subject = $title; // 邮件标题
$mail->FromName = $title; // 发件人姓名
$web_url = 'http://www.starbea.net/';
$address = "jessica@starbea.net"; // 收件人email
$mail->AddAddress($address, "亲"); // 添加收件人（地址，昵称）
$mail->Body = "<table cellspacing='0' cellpadding='0' border='0' align='center' width='648' style='font-family:微软雅黑;margin:25px auto'><tbody><tr><td style='color:#010101'><h3 style='margin-bottom:10px;font-size:18px'>$title</h3></td></tr><tr><td style='border-left:1px solid #D1FFD1;padding:10px 20px 0;background:none repeat scroll 0 0 #fff;border-top:5px solid #2F363C;box-shadow:4px 6px 6px #e0e0e0;-moz-box-shadow:4px 4px 6px #e0e0e0;-webkit-box-shadow:4px 4px 6px #e0e0e0;background:#FFF;border-right:1px solid #D1FFD1;line-height:1.5'><p><span style='color:#574629;font-weight:700;margin-right:5px'>用户名称:</span>$user<br><span style='color:#574629;font-weight:700;margin-right:5px'>用户邮箱:</span>$email<br></p><p style='line-height:1;margin:0;color:#574629;font-weight:bold'>留言内容：</p><p>$msg</p></td></tr><tr><td style='border-bottom:1px solid #D1FFD1;border-left:1px solid #D1FFD1;padding:0 20px 20px;background:none repeat scroll 0 0 #fff;border-right:1px solid #D1FFD1'><hr style='color:#ccc'><p style='color:#F60;font-size:9pt'>点击访问官网<a target='_blank' href='$web_url'>$web_url</a></p></td></tr></tbody></table>";;
$mail->IsHTML(true); // 支持html格式内容
if (!$mail->Send()) {
    //echo "error: " . $mail->ErrorInfo;
    echo 'The system is busy, please try again later';
} else {
    $_SESSION['time'] = time();
    echo "send successful";
}

/**
 * 校验是否为邮箱
 *
 * @param unknown $email
 * @return number
 */
function check_email($email)
{
    $pattern_test = '/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i';
    return preg_match($pattern_test, $email);
}

