<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<body style="background:#f0f9fd;">
<div class="lefttop"><span></span>通讯录</div>

<dl class="leftmenu">
    <?php if(is_array($menu)){foreach($menu as $key=>$parent){?>
        <dd>
            <div class="title"><span>
            <i class="fa fa-<?php echo $parent['css_icon'];?>"></i>
            </span><?php echo $icon[$parent[id]];?></i>
                <?php echo $parent['menu_name'];?>
            </div>
            <ul class="menuson">
                <?php if(is_array($parent['_child'])){foreach($parent['_child'] as $key=>$child){?>
                    <li><cite></cite><a target="rightFrame" href="<?php echo U($child['menu_url']); ?>"><?php echo $child['menu_name'];?></a><i></i>
                    </li>
                <?php } } ?>
            </ul>
        </dd>
    <?php } } ?>
</dl>

<script language="javascript" type="text/javascript">
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/public/leftMenu.js']);
    });
</script>
</body>
</html>
