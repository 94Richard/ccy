<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户</title>
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
      <li><a href="javascript:;">回复留言</a></li>
    </ul>
  </div>

</div>
<div class="formbody">
  <div class="formtitle"><span>编辑留言</span></div>
  <form method="post" action="index.php?a=Message&f=update" >
    <table cellspacing="1" >
      <tr>
      <tr>
        <td width="80">留言者：</td>
        <td class="form-control" style=" float: left; margin-left: 8px;"><?php echo $vo['content'];?></td>
      </tr>
      <tr>
        <td  width="80">会员留言：</td>
        <td><textarea  cols="68" rows="6" style="resize:none;" readonly="readonly" class="form-control bootstrp_textarea top8"><?php echo $vo['content'];?></textarea></td>
      </tr>
      <tr>
      <tr>
        <td width="80">回复内容：</td>
        <td><textarea name="reply" cols="68"  style="resize:none;" rows="6" class="form-control bootstrp_textarea top8"><?php echo $vo['reply'];?></textarea></td>
      </tr>
      <tr>
        <td align="right"></td>
        <td>
          <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
          <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=Message&f=index">提交</button>
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>