<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>无标题文档</title>
<!--
公共的 CSS. javascript 文件引入
-->
<link rel="stylesheet" href="./template/Default/js/lib/bootstrap-3.3.5/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/style.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/js/lib/layer-v2.2/skin/layer.css" type="text/css" />
<script src="./template/Default/js/require.js"></script>



</head>

<body style="background:url(./template/Default/images/topbg.gif) repeat-x;">
<div class="topleft"> <a href="index.php?a=Home&f=index" target="_parent"><img src="./template/Default/images/logo.png" title="系统首页"/></a> </div>
<ul class="nav2">
  <li><a href="index.php?a=Home&f=index" target="_parent" class="selected"><img src="./template/Default/images/icon01.png" title="工作台"/>
    <h2>首页</h2>
    </a></li>
  <li><a href="index.php?a=AdminUser" target="rightFrame"><img src="./template/Default/images/icon02.png" title="模型管理"/>
    <h2>用户管理</h2>
    </a></li>
  <li><a href="index.php?a=AdminAuth" target="rightFrame"><img src="./template/Default/images/icon03.png" title="模块设计"/>
    <h2>权限列表</h2>
    </a></li>
  <li><a href="index.php?a=WebConfig&dir=1" target="rightFrame"><img src="./template/Default/images/icon06.png" title="系统设置"/>
    <h2>网站设置</h2>
    </a></li>
</ul>
<div class="topright">
  <ul>
    <li style="margin-top:-20px;">
      <div class="user" style="display:inline-block;"> <span><?php echo $_SESSION[SESSION_NAME]['uname'];?></span>&nbsp;&nbsp;&nbsp;&nbsp; </div>
    </li>
    <li><a target="_blank" href="<?php echo $root_url;?>">返回前台</a></li>
    <li id="language_li">
    <p id="languageP"><?php echo $LANG_TEXT;?>版&nbsp;&nbsp;<i class="fa fa-angle-down"></i></p>
    <p id="lM" style="">
     <?php if(is_array($languageList)){foreach($languageList as $key=>$vo){?>
     <span><a target="_ajax"   href="<?php echo U(array('a'=>"WebConfig",'f'=>"changeLang",'id'=>"{$vo['id']}")); ?>"><?php echo $vo['language'];?>版</a>&nbsp;&nbsp;</span>
     <?php } } ?>
     </p>
      </li>
    <li><a href="index.php?a=User&f=logout" target="_parent">退出</a></li>
  </ul>
</div>

<script language="javascript" type="text/javascript">
  require(['./template/Default/js/common.js'], function (common) {
	   require(['./template/Default/js/public/top.js']);
  });
</script>
</body>
</html>
