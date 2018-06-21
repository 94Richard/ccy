<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>基本内容</title>
    <!--
公共的 CSS. javascript 文件引入
-->
<link rel="stylesheet" href="./template/Default/js/lib/bootstrap-3.3.5/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/style.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/js/lib/layer-v2.2/skin/layer.css" type="text/css" />
<script src="./template/Default/js/require.js"></script>






</head>


<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">数据表</a></li>
        <li><a href="#">基本内容</a></li>
    </ul>
</div>

<div class="system">
    <h3 style="text-align: left;">【系统信息】</h3>
    <ul>

        <?php if(is_array($info)){foreach($info as $key=>$val){?>
            <li><font class="title"><?php echo $key;?>：</font><font><?php echo $val;?></font></li>
        <?php } } ?>
    </ul>
</div>

<div class="Statistics">
    <h3  style="text-align: left;">【数据统计】</h3>
    <ul>
        <?php if(is_array($countArr)){foreach($countArr as $key=>$val){?>
            <li><font class="title"><?php echo $key;?>：</font><font><?php echo $val;?></font></li>
        <?php } } ?>
    </ul>
</div>



</body>
</html>
