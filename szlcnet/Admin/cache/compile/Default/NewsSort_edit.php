<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑新闻分类</title>
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
      <li><a href="javascript:;">编辑新闻分类 </a></li>
    </ul>
  </div>
  <div class="pull-right">
    <a class="btn btn-primary insetBtn" href="index.php?a=NewsSort&f=add" type="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
  </div>
</div>
<div class="formbody">
  <div class="formtitle"><span>编辑新闻分类</span></div>
  <form method="post" action="index.php?a=NewsSort&f=update" class="ajax_form" >
    <table cellspacing="1" class="myform">
      <tr>
        <td align="right">分类名称：</td>
        <td><input type="text" name="news_sort_name" id="input_alias"  size="25" value="<?php echo $vo['news_sort_name'];?>" class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">别名：</td>
        <td><input type="text" name="alias" id="alias" size="25" value="<?php echo $vo['alias'];?>" class="form-control"  />
          </td>
      </tr>
      <tr>
        <td align="right">排 序：</td>
        <td><input type="text" name="news_sort_order" value="<?php echo $vo['news_sort_order'];?>" size="25" class="form-control" /></td>
      </tr>
      <tr>
        <td align="right">分类描述：</td>
        <td><textarea name="news_sort_content" cols="68" rows="6" class="form-control bootstrp_textarea""><?php echo $vo['news_sort_content'];?></textarea></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="id" value="<?php echo $vo['news_sort_id'];?>" />
          <input type="hidden" name="name" value="news_sort_id" /></td>
        <td>
          <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
          <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=NewsSort&f=index">提交</button>
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