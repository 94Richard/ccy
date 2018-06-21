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
            <li><a href="javascript:;">编辑单页 </a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=Basic&f=add" type="button"><i
                class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
    </div>
</div>
<div class="formbody">
    <div class="formtitle"><span>编辑单页</span></div>
  <form method="post" action="index.php?a=Basic&f=update" class="ajax_form" >
    <table cellspacing="1" class="myform">

      <tr>
        <td align="right">所属分类：</td>
        <td><select name="basic_one_id" class="form-control selectSubmit">
            <option value="0">--请选择--</option>
            <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>                
              <option value="<?php echo $v['basic_sort_id'];?>"  <?php if($vo['basic_one_id']==$v['basic_sort_id']){ ?>selected="selected"<?php } ?>><?php echo $v['basic_sort_name'];?>
              </option>
            <?php } } ?>
          </select>
          </td>
      </tr>
      <tr>
        <td align="right">单页名称：</td>
        <td><input type="text" name="basic_name" value="<?php echo $vo['basic_name'];?>" id="input_alias" size="25"  class="form-control"  /></td>
      </tr>
      <tr>
        <td align="right">别名：</td>
        <td><input type="text" name="basic_alias" size="25"  id="alias" class="form-control" value="<?php echo $vo['basic_alias'];?>"  />
          </td>
      </tr>


         <tr> 
      <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面标题：</td>
      <td width="84%" >
    <input name="basic_seo_title" id="basic_seo_title"  value="<?php echo $vo['basic_seo_title'];?>" class="form-control"  type="text"  value="" size="100" >
    </td>
    </tr>
            <tr > 
      <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面描述：</td>
      <td width="84%" >
     <textarea name="basic_seo_description" cols="50" class="form-control bootstrp_textarea top8" id="basic_seo_description"><?php echo $vo['basic_seo_description'];?></textarea>
    </td>
    </tr>
           <tr > 
      <td width="16%" align="right" ><font color="#FF0000">*</font>SEO页面关键词：</td>
      <td width="84%" >
     <textarea name="basic_seo_keyword" cols="50" class="form-control bootstrp_textarea top8" id="basic_seo_keyword"><?php echo $vo['basic_seo_keyword'];?></textarea>
    </td>
    </tr>
      <tr>
        <td align="right">排 序：</td>
        <td><input type="text" name="basic_order" size="25" class="form-control" value="<?php echo $vo['basic_order'];?>" /></td>
      </tr>

        <tr>
            <td align="right">url指向：</td>
            <td><input type="text" name="url" size="25" value="<?php echo $vo['url'];?>" class="form-control"/>
            </td>
        </tr>
      <tr>
        <td align="right">单页描述：</td>
        <td style="padding:8px;"><textarea name="basic_content" cols="68" rows="6" class="form-control bootstrp_textarea top8"><?php echo $vo['basic_content'];?></textarea></td>
      </tr>
     

       <tr>
        <td align="right"><input type="hidden" name="id" value="<?php echo $vo['basic_id'];?>" />
          <input type="hidden" name="name" value="basic_id" /></td>
        <td>
            <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
            
              <input type="hidden" name="refresh" value="index.php?a=Basic&f=index" />
          		<input type="hidden" name="sort_id" value="basic_one_id" />
                
            <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=Basic&f=index">提交</button>
        </td>
      </tr>


    </table>
  </form>
</div>

<script src="<?php echo $APP_URL;?>/template/Default/kindeditor/kindeditor.js?t=" +new Date()></script>
<script charset="utf-8" src="<?php echo $APP_URL;?>/template/Default/kindeditor/lang/zh_CN.js"></script>
<script>
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name="basic_content"]', {
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