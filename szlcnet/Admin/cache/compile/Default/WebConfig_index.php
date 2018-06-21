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
            <li><a href="javascript:;">网站基本设置</a></li>
        </ul>
    </div>
</div>
<div class="wrap">
    <div class='container-fluid top8'>
        <div class="clear"></div>
        <ul class='nav nav-tabs' id="nav_tabs">
    <li <?php if($configTab =='basic'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=index&tip=basic" >基本设置</a></li>
    <li <?php if($configTab =='image'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=imageSetting&tip=image" >图像</a></li>
    <li <?php if($configTab =='language'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=language&tip=language">语言</a></li>
   <!-- <li <?php if($configTab =='option'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=index&tip=option" >选项</a></li>-->
</ul>
        <div class='tab-content' id="tab-content">
            <form method="post" action="index.php?a=WebConfig&f=update" class="ajax_form configTable">
  <table cellspacing="0">
    <tr>
      <td width="100">站点名称：</td>
      <td><input name="web_title" placeholder="请输入站点名称" value="<?php echo $vo['web_title'];?>"
                       class="form-control"
                       type="text"></td>
    </tr>
    <tr>
      <td>公司名称：</td>
      <td><input name="web_company" placeholder="请输入公司名称" class="form-control" type="text"
                       value="<?php echo $vo['web_company'];?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>站点关键字：</td>
      <td><input name="web_keywords" placeholder="请输入站点关键字" value="<?php echo $vo['web_keywords'];?>"
                       class="form-control"
                       type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td>站点描述：</td>
      <td><textarea name="web_description" class="form-control bootstrp_textarea" placeholder="请输入站点描述"><?php echo $vo['web_description'];?></textarea></td>
      <td></td>
    </tr>
    <tr>
      <td>前台Logo：</td>
      <td><!--
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
</td>
    </tr>
    <tr>
      <td>公司地址：</td>
      <td><input name="web_address" placeholder="请输入公司地址" value="<?php echo $vo['web_address'];?>"
                       class="form-control"
                       type="text"></td>
    </tr>
    <tr>
      <td>客服电话：</td>
      <td><input type="text" name="web_phone" size="6" value="<?php echo $vo['web_phone'];?>"
                       placeholder="请输入客服电话"
                       class="form-control"/></td>
    </tr>
    <tr>
      <td>400电话：</td>
      <td><input type="text" name="tel_400" size="6" value="<?php echo $vo['tel_400'];?>"
                       placeholder="400电话"
                       class="form-control"/></td>
    </tr>
    <tr>
      <td>QQ：</td>
      <td><input type="text" name="qq" size="6" value="<?php echo $vo['qq'];?>"
                       placeholder="QQ号码,多个请以|隔开"
                       class="form-control"/></td>
    </tr>
    <tr>
      <td>传真：</td>
      <td><input type="text" name="web_fax" size="6" value="<?php echo $vo['web_fax'];?>" placeholder="请输入传真"
                       class="form-control"/></td>
    </tr>
    <tr>
      <td>邮箱：</td>
      <td><input type="text" name="web_email" size="6" value="<?php echo $vo['web_email'];?>" placeholder="请输入邮箱"
                       class="form-control"/></td>
    </tr>
    <tr>
      <td>ICP备案证书号：</td>
      <td><input type="text" name="web_copyright" size="6" value="<?php echo $vo['web_copyright'];?>"
                       placeholder="请输入ICP备案证书号" class="form-control"/></td>
    </tr>
    <tr style="display: none;">
      <td>是否关闭网站：</td>
      <td><select name="web_close" class="form-control">
                <?php myselect('打开:1,关闭站点:0',$vo['web_close']); ?>
        </select></td>
    </tr>
    <tr style="display: none;">
      <td>推送客服代码：</td>
      <td><textarea name="server_code" class="form-control bootstrp_textarea"
                          placeholder="推送客服代码"><?php echo $vo['server_code'];?></textarea></td>
      <td></td>
    </tr>
    <tr>
      <td>&nbsp;
        <input type="hidden" name="id" value="<?php echo $vo['id'];?>" />
        <input type="hidden" name="name" value="id" /></td>
      <td><button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=WebConfig&f=index">提交 </button></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
        </div>
    </div>
</div>
<script language="javascript" type="text/javascript">
    var TAB="<?php echo $configTab;?>";
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/webConfig/webConfig.js']);
    });
</script>
</body>
</html>
