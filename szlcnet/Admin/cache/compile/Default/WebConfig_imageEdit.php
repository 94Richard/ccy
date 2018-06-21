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
            <li><a href="javascript:;">图像编辑 </a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=WebConfig&f=imageAdd&tip=image" type="button"><i
                class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
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
    <div class="formtitle"><span>图像编辑</span></div>
    <form method="post" action="index.php?a=WebConfig&f=imageUpdate&tab=image_setting" class="ajax_form">
        <table cellspacing="1">
            <tr>
                <td>名称：</td>
                <td><input name="title" placeholder="名称" value="<?php echo $vo['title'];?>" class="form-control" type="text"></td>
                <td><span class="msgInfo_input"><i>*</i>对图片设置的描述!</span></td>
            </tr>
            <tr>
                <td>宽度：</td>
                <td><input name="w" placeholder="请输入图片宽度" value="<?php echo $vo['w'];?>" class="form-control" type="text"></td>
                <td><span class="msgInfo_input"><i>*</i>宽度如果为0，则以高度为准，等比例缩放</span></td>
            </tr>
            <tr>
                <td>高度：</td>
                <td><input name="h" placeholder="请输入图片高度" value="<?php echo $vo['h'];?>" class="form-control" type="text"></td>
                <td><span class="msgInfo_input"><i>*</i>高度如果为0，则以宽度为准，等比例缩放</span></td>
            </tr>
            <tr>
                <td>上传水印图片：</td>
                <td>
                    <!--
	delte-url:为删除的ajax URL路径
    data-url: 为上传的AJax URL路径
    data-img-url: 如果之前有上传过图片。则为上传的路径
    data-dir: 为上传的文件目录
    class='is_upload' 如果有上传过图片。则显示
-->
<link rel="stylesheet" href="./template/Default/css/ajax_upload.css" type="text/css" />
<div style="float:left; position:relative;">
<div class="btn2" style="float:left;"> <span>添加附件</span> <input id="fileupload" type="file" name="<?php echo $file_name;?>" delte-url="index.php?a=WebConfig&f=ajax_delete_upload" data-url="index.php?a=WebConfig&f=ajax_upload" data-dir="<?php echo $upload_dir;?>"
  <?php if($img_url){ ?> data-img-url='<?php echo $web_dir;?><?php echo $img_url;?>'<?php } ?>
  > </div>
  <div class="is_upload"> <span class="sle_img show_upload_imgs">预览</span>
    <div class="hide_upload_img t2"> <img   src="<?php echo $root_url;?><?php echo $img_url;?>" onerror="this.src='<?php echo $root_url;?><?php echo $defaultImg;?>';" > </div>
    <span class="sle_img delimg">删除</span> </div>
<div class="progress" style="float:left;"><span class="bar"></span><span class="percent">0%</span > </div>
<span class="files"></span>
<div id="showimg"></div>
<input type="hidden" name="<?php echo $file_name;?>" value="<?php echo $img_url;?>" id="hide_file" />
</div>

                    <span class="msgInfo_input">水印可选</span>
                </td>
                <td></td>
            </tr>

            <tr>
                <td>水印位置：</td>
                <td>
                    <select name="option" class="form-control">
                        <option value="1"  <?php if($vo['option']==1){ ?>selected="selected"<?php } ?>>左上</option>
                        <option value="2"  <?php if($vo['option']==2){ ?>selected="selected"<?php } ?>>左中</option>
                        <option value="3"  <?php if($vo['option']==3){ ?>selected="selected"<?php } ?>>左右</option>
                        <option value="4"  <?php if($vo['option']==4){ ?>selected="selected"<?php } ?>>中左</option>
                        <option value="5"  <?php if($vo['option']==5){ ?>selected="selected"<?php } ?>>正居中</option>
                        <option value="6"  <?php if($vo['option']==6){ ?>selected="selected"<?php } ?>>中右</option>
                        <option value="7"  <?php if($vo['option']==7){ ?>selected="selected"<?php } ?>>下左</option>
                        <option value="8"  <?php if($vo['option']==8){ ?>selected="selected"<?php } ?>>下中</option>
                        <option value="9"  <?php if($vo['option']==9){ ?>selected="selected"<?php } ?>>下右</option>
                        <option value="0"  <?php if($vo['option']==0){ ?>selected="selected"<?php } ?>>随机位置</option>
                    </select>

                </td>
                <td></td>
            </tr>

            <tr>
                <td> <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
                    <input type="hidden" name="id" value="<?php echo $vo['id'];?>"/><input type="hidden" name="name" value="id"/></td>
                <td>
                    <button type="button" class="btn btn-primary ajax_btn"
                            data-url="index.php?a=WebConfig&f=imageSetting&tip=image">提交
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
