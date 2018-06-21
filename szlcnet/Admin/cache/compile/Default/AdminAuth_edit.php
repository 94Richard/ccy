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
            <li><a href="javascript:;">后台权限编辑 </a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=AdminAuth&f=add" type="button"><i
                class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
    </div>
</div>


<div class="formbody">
    <div class="formtitle"><span>新增权限</span></div>
    <form method="post" action="index.php?a=AdminAuth&f=update" class="ajax_form">
        <table cellspacing="1">
            <tr>
                <td width="100">上级父类：</td>
                <td><select name="pid" class="form-control">
                    <option value="0">根目录</option>
                    <?php if(is_array($parent_auth)){foreach($parent_auth as $key=>$v){?>
                        <option value="<?php echo $v['id'];?>"><?php echo $v['title'];?></option>
                    <?php } } ?>
                </select></td>
            </tr>
            <tr>
                <td>标题名称：</td>
                <td><input name="title" placeholder="请输入名称" value="<?php echo $vo['title'];?>" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>图标CSS：</td>
                <td><input name="css_icon" placeholder="请输入名称" class="form-control" type="text" value="<?php echo $vo['css_icon'];?>">
                </td>
                <td><span class="msgInfo_input"><a target="_blank" href="http://fontawesome.dashgame.com/">请输入fontawesome
                    图标CSS</a></span></td>
            </tr>
            <tr>
                <td>所属Action名称：</td>
                <td><input name="auth_action" placeholder="请输入Action名称" value="<?php echo $vo['auth_action'];?>" class="form-control"
                           type="text"></td>
                <td></td>
            </tr>
            <tr>
                <td>所属Action方法：</td>
                <td><input name="auth_fun" placeholder="请输入Action方法" value="<?php echo $vo['auth_fun'];?>" class="form-control"
                           type="text"></td>
                <td><span class="msgInfo_input"><i>*</i>以,分隔且以,结尾(多操作组合成一个权限)!</span></td>
            </tr>
            <tr>
                <td>菜单名称：</td>
                <td><input name="menu_name" placeholder="请输入菜单名称" value="<?php echo $vo['menu_name'];?>" class="form-control"
                           type="text"></td>
            </tr>
            <tr>
                <td>菜单地址：</td>
                <td><input name="menu_url" placeholder="请输入菜单地址" value="<?php echo $vo['menu_url'];?>" class="form-control"
                           type="text"></td>
            </tr>
            <tr>
                <td>排 序：</td>
                <td><input type="text" name="orderid" size="6" value="<?php echo $vo['orderid'];?>" placeholder="排序数字越大越靠前"
                           class="form-control"/></td>
            </tr>
            <tr>
                <td>状 态：</td>
                <td><select name="status" class="form-control">
                    <?php myselect('启用:1,锁定:0',$vo['status']); ?>
                </select></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $vo['id'];?>"/></td>
                <td>
                    <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=AdminAuth&f=index">提交</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script language="javascript" type="text/javascript">
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/public/edit.js']);
    });
</script>
</body>
</html>
