<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增广告</title>
<!--
公共的 CSS. javascript 文件引入
-->
<link rel="stylesheet" href="./template/Default/js/lib/bootstrap-3.3.5/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/style.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/js/lib/layer-v2.2/skin/layer.css" type="text/css" />
<script src="./template/Default/js/require.js"></script>



</head>

<body class="pad_bottom_20">
<div class="place"><span><i class="glyphicon glyphicon-th-list"></i>&nbsp;位置：</span>

  <div class="pull-left">
    <ul class="placeul">
      <li><a href="javascript:;">新增广告 </a></li>
    </ul>
  </div>
  <div class="pull-right">
    <a class="btn btn-primary insetBtn" href="index.php?a=Banner&f=add" type="button"><i
            class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
  </div>
</div>

<div class="formbody">

  <div class="formtitle"><span>新增广告</span></div>

  <form method="post" action="index.php?a=Banner&f=insert" class="ajax_form" >
    <table cellspacing="1" class="myform">

      <tr>
        <td align="right">所属分类：</td>
        <td><select name="banner_id" class="form-control selectSubmit">
            <option value="0">--请选择--</option>
            <?php if(is_array($list)){foreach($list as $key=>$v){?>
            
            
            
            <option value="<?php echo $v['banner_sort_id'];?>"><?php echo $v['banner_sort_name'];?> </option>
            <?php } } ?>
          </select></td>
      </tr>
      <tr>
        <td align="right">名称：</td>
        <td><input type="text" name="banner_name" size="25"  class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">URL链接地址：</td>
        <td><input type="text" name="banner_url"  size="25" class="form-control" /></td>
      </tr>
      <tr>
        <td align="right">配图：</td>
        <td><!--
	delte-url:为删除的ajax URL路径
    data-url: 为上传的AJax URL路径
    data-img-url: 如果之前有上传过图片。则为上传的路径
    data-dir: 为上传的文件目录
    class='is_upload' 如果有上传过图片。则显示
-->
<link rel="stylesheet" href="./template/Default/css/ajax_upload.css" type="text/css" />
<div style="float:left; position:relative;">
<div class="btn2" style="float:left;"> <span>添加附件</span> <input id="fileupload" type="file" name="<?php echo $file_name;?>" delte-url="index.php?a=Banner&f=ajax_delete_upload" data-url="index.php?a=Banner&f=ajax_upload" data-dir="<?php echo $upload_dir;?>"
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
        <td align="right">排 序：</td>
        <td><input type="text" name="banner_order"  size="25" class="form-control" /></td>
      </tr>
      <tr>
        <td align="right">广告描述：</td>
        <td><textarea name="banner_content" cols="68" rows="6" class="form-control bootstrp_textarea"></textarea></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="id" />
          <input type="hidden" name="name" value="banner_id" /></td>
        <td colspan="1">
          <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
          <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=Banner&f=index">提交</button>
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