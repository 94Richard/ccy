<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑部门</title>
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
  <div class="pull-right"> <a class="btn btn-primary insetBtn" href="index.php?a=Recruitment&f=add" type="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a> </div>
</div>
<div class="formbody">
  <div class="formtitle"><span>编辑部门</span></div>
  <form method="post" action="index.php?a=Recruitment&f=update" class="ajax_form" >
    <table cellspacing="1" class="myform">
      <tr>
        <td align="right">所属部门：</td>
        <td><select name="sort_id" class="form-control selectSubmit">
            <option value="0">--请选择--</option>
            <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>
                <option value="<?php echo $v['id'];?>" 
				 <?php if($vo['id']==$v['sort_id']){ ?>selected="selected"<?php } ?>><?php echo $v['sort_name'];?>
            </option>
            <?php } } ?>
          </select></td>
      </tr>
      <tr>
        <td align="right">职位：</td>
        <td><input type="text" name="job" value="<?php echo $vo['job'];?>" id="input_alias" size="25"  class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">别名：</td>
        <td><input type="text" name="alias" size="25"  id="alias" class="form-control" value="<?php echo $vo['alias'];?>"  /></td>
      </tr>
      <tr>
        <td align="right">工作经验：</td>
        <td><input type="text" name="experience" size="25" class="form-control" value="<?php echo $vo['experience'];?>" /></td>
      </tr>
      <tr>
        <td align="right">招聘人数：</td>
        <td><input type="text" name="recruitment_num" size="25" class="form-control" value="<?php echo $vo['recruitment_num'];?>" /></td>
      </tr>
      <tr>
        <td align="right">当前应聘人数：</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red; font-weight:bold; display:inline;"><?php echo $vo['employ_num'];?>人</span></td>
      </tr>
      <tr>
        <td align="right">学历要求：</td>
        <td><input type="text" name="education" size="25" class="form-control" value="<?php echo $vo['education'];?>" /></td>
      </tr>
      <tr>
        <td align="right">工作性质：</td>
        <td><input type="text" name="nature" size="25" class="form-control" value="<?php echo $vo['nature'];?>" /></td>
      </tr>
      <tr>
        <td align="right">工作地点：</td>
        <td><input type="text" name="address" size="25" class="form-control" value="<?php echo $vo['address'];?>" /></td>
      </tr>
      <tr>
        <td align="right">薪资待遇：</td>
        <td><input type="text" name="salary" size="25" class="form-control" value="<?php echo $vo['salary'];?>" /></td>
      </tr>
      <tr>
        <td align="right">单页描述：</td>
        <td style="padding:8px;"><textarea name="des" cols="68" rows="6" class="form-control bootstrp_textarea top8"><?php echo $vo['des'];?></textarea></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="id" value="<?php echo $vo['id'];?>" /></td>
        <td><input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
          <input type="hidden" name="refresh" value="index.php?a=Recruitment&f=index" />
          <input type="hidden" name="parent_id" value="sort_id" />
          <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=Recruitment&f=index">提交</button></td>
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