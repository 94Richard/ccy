<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

<div class="place"><span><i class="glyphicon glyphicon-th-list"></i>&nbsp;位置：</span>

    <div class="pull-left">
        <ul class="placeul">
            <li><a href="javascript:;">语言编辑 </a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=WebConfig&f=add&tip=image" type="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
    </div>
</div>
<div class="formbody">
    <div class="clear"></div>
    <ul class='nav nav-tabs' id="nav_tabs">
    <li <?php if($configTab =='basic'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=index&tip=basic" >基本设置</a></li>
    <li <?php if($configTab =='image'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=imageSetting&tip=image" >图像</a></li>
    <li <?php if($configTab =='language'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=language&tip=language">语言</a></li>
   <!-- <li <?php if($configTab =='option'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=index&tip=option" >选项</a></li>-->
</ul>
    <div class="formtitle"><span>语言编辑</span></div>
    <form method="post" action="index.php?a=WebConfig&f=languageUpdate&tab=language" class="ajax_form">
        <table cellspacing="1">
            <tr>
                <td>语言名称：</td>
                <td><input name="language" placeholder="名称" value="<?php echo $vo['language'];?>" class="form-control" type="text">
                </td>
                <td><span class="msgInfo_input"><i>*</i>网站多语言的名称</span></td>
            </tr>
            <tr>
                <td>状态：</td>
                <td><input name="status" value="0" class="form-control" type="text"></td>
                <td><span class="msgInfo_input"><i>*</i>1-语言开启，非1即为关闭</span></td>
            </tr>

            <tr>
                <td>图标CSS：</td>
                <td><input name="css_icon" placeholder="请输入名称" class="form-control" type="text" value="<?php echo $vo['css_icon'];?>">
                </td>
                <td><span class="msgInfo_input"><a target="_blank" href="http://fontawesome.dashgame.com/">请输入fontawesome
                    图标CSS</a></span></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $vo['id'];?>"/><input type="hidden" name="name" value="id"/></td>
                <td>
                    <button type="button" class="btn btn-primary ajax_btn"
                            data-url="index.php?a=WebConfig&f=language&tip=language">提交
                    </button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script language="javascript" type="text/javascript">
    var TAB = "<?php echo $configTab;?>";
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/public/edit.js']);
    });
</script>
</body>
</html>
