<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>欢迎登录后台管理系统</title>
<!--
公共的 CSS. javascript 文件引入
-->
<link rel="stylesheet" href="./template/Default/js/lib/bootstrap-3.3.5/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/style.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/js/lib/layer-v2.2/skin/layer.css" type="text/css" />
<script src="./template/Default/js/require.js"></script>



</head>

<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
<div id="mainBody">
  <div id="cloud1" class="cloud"></div>
  <div id="cloud2" class="cloud"></div>
</div>
<div class="logintop"><span>您好!欢迎登录本系统！如有任何问题,请与本公司客服人员联系,我们将第一时间为您服务!</span>
  <ul>
    <li><a href="#">回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
  </ul>
</div>
<div class="loginbody"><span class="systemlogo"></span>
  <div class="loginbox" id="loginbox">
    <form action="index.php?a=User&f=check" method="post" class="ajax_form">
      <ul>
        <li>
          <input name="uname" placeholder="请输入您的登录帐号" type="text"  datatype="require"  class="loginuser" value="" />
        </li>
        <li>
          <input name="pwd" placeholder="请输入您的登录密码" dataType="require"  type="password" class="loginuser" value=""/>
        </li>
        <li>
          <input name="verify_code" placeholder="请输入验证码" dataType="require"  type="text" class="loginpwd" value=""
                          id="verify" />
          <img src="index.php?a=User&f=verify" onclick="this.src='index.php?a=User&f=verify&'+Math.random()"
                         id="verify_img"/></li>
        <li>
          <input type="button" class="loginbtn ajax_btn" value="登录"
                    />
          <label>
            <input name="" type="checkbox" value="" checked="checked"/>
            记住密码</label>
          <label><a href="#">忘记密码？</a></label>
        </li>
      </ul>
    </form>
  </div>
</div>
<script language="javascript" type="text/javascript">
  require(['./template/Default/js/common.js'], function (common) {
            require(['./template/Default/js/Login/Login.js']);
        });
</script>
<div class="loginbm">版权所有 2016 <a href="http://www.szlcnet.com" target="_blank">szlcnet.com</a> 地址:龙岗区南联路73号铭泰商务中心710-711 服务电话:400-186-9596 </div>
</body>
</html>
