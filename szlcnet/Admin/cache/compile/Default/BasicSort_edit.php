<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑单页分类</title>
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
      <li><a href="javascript:;">新增单页分类 </a></li>
    </ul>
  </div>
</div>
<div class="formbody">
  <div class="formtitle"><span>新增分类</span></div>
  <form method="post" action="index.php?a=BasicSort&f=update" class="ajax_form" >
    <table cellspacing="1" class="myform">
      
        <td align="right">分类名称：</td>
        <td><input type="text" name="basic_sort_name" size="25" id="input_alias" value="<?php echo $vo['basic_sort_name'];?>" class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">别名：</td>
        <td><input type="text" name="basic_alias" id="alias" size="25" value="<?php echo $vo['basic_alias'];?>" class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">上级分类：</td>
        <td><select name="parent_id" class="form-control">
            <option value="0">无</option>
            <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>

            <option value="<?php echo $v['basic_sort_id'];?>"
            
            <?php if($vo['parent_id']==$v['basic_sort_id']){ ?>selected="selected"<?php } ?>
            ><?php echo $v['basic_sort_name'];?>
          
            </option>
            <?php } } ?>
          </select></td>
      </tr>
      <tr>
        <td align="right">排 序：</td>
        <td><input type="text" name="basic_sort_order" value="<?php echo $vo['basic_sort_order'];?>" size="25" class="form-control" /></td>
      </tr>
      <tr>
        <td align="right">分类描述：</td>
        <td><textarea name="basic_sort_content" cols="68" rows="6" class="form-control bootstrp_textarea"><?php echo $vo['basic_sort_content'];?></textarea></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="id" value="<?php echo $vo['basic_sort_id'];?>" />
          <input type="hidden" name="name" value="basic_sort_id" />
          <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/></td>
        <td><button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=BasicSort&f=index">提交</button></td>
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