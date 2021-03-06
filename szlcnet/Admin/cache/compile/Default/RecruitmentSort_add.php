<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑单页</title>
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
      <li><a href="javascript:;">编辑部门 </a></li>
    </ul>
  </div>
  <div class="pull-right"> <a class="btn btn-primary insetBtn" href="index.php?a=RecruitmentSort&f=add" type="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a> </div>
</div>
<div class="formbody">
  <div class="formtitle"><span>编辑单页</span></div>
  <form method="post" action="index.php?a=RecruitmentSort&f=insert" class="ajax_form" >
    <table cellspacing="1" class="myform">
      <tr>
        <td align="right">部门名称：</td>
        <td><input type="text" name="sort_name" value="<?php echo $vo['sort_name'];?>" id="input_alias" size="25"  class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">别名：</td>
        <td><input type="text" name="alias" size="25"  id="alias" class="form-control" value="<?php echo $vo['alias'];?>"  /></td>
      </tr>
      <tr>
        <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面标题：</td>
        <td width="84%" ><input name="seo_title" id="seo_title"  value="<?php echo $vo['seo_title'];?>" class="form-control"  type="text"  value="" size="100" ></td>
      </tr>
      <tr >
        <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面描述：</td>
        <td width="84%" ><textarea name="seo_description" cols="50" class="form-control bootstrp_textarea top8" id="seo_description"><?php echo $vo['seo_description'];?></textarea></td>
      </tr>
      <tr >
        <td width="16%" align="right" ><font color="#FF0000">*</font>SEO页面关键词：</td>
        <td width="84%" ><textarea name="seo_keyword" cols="50" class="form-control bootstrp_textarea top8" id="seo_keyword"><?php echo $vo['seo_keyword'];?></textarea></td>
      </tr>
      <tr>
        <td align="right">部门邮箱：</td>
        <td><input type="text" name="email" size="25" class="form-control" value="<?php echo $vo['email'];?>" /></td>
      </tr>
      <tr>
        <td align="right">排 序：</td>
        <td><input type="text" name="order" size="25" class="form-control" value="<?php echo $vo['order'];?>" /></td>
      </tr>
      <tr>
        <td align="right">单页描述：</td>
        <td style="padding:8px;"><textarea name="des" cols="68" rows="6" class="form-control bootstrp_textarea top8"><?php echo $vo['des'];?></textarea></td>
      </tr>
      <tr>
        <td align="right"></td>
        <td><input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
          <input type="hidden" name="refresh" value="index.php?a=RecruitmentSort&f=index" />
          <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=RecruitmentSort&f=index">提交</button></td>
      </tr>
    </table>
  </form>
</div>
<script src="<?php echo $APP_URL;?>/template/Default/kindeditor/kindeditor.js?t=" +new Date()></script> 
<script charset="utf-8" src="<?php echo $APP_URL;?>/template/Default/kindeditor/lang/zh_CN.js"></script> 
<script>
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name="des"]', {
            allowFileManager: true,
            width: "100%", //编辑器的宽度为70%
            height: "450px", //编辑器的高度为100px
            afterBlur: function () {
                this.sync();
            }
        });
    });
</script> 
<script language="javascript" type="text/javascript">
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/public/edit.js']);
    });
</script>
</body>
</html>