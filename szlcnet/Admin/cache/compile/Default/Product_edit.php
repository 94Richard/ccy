<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>编辑产品</title>
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
      <li><a href="javascript:;">编辑产品 </a></li>
    </ul>
  </div>
  <div class="pull-right"> <a class="btn btn-primary insetBtn" href="index.php?a=Product&f=add" type="button"><i
                class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a> </div>
</div>
<div class="formbody">
  <div class="formtitle"><span>编辑产品</span></div>
  <form method="post" action="index.php?a=Product&f=update" class="ajax_form">
    <table cellspacing="1" class="myform">
      <tr>
        <td align="right">所属：</> 
        <td><select name="product_one_id" class="form-control selectSubmit">
            <option value="0">--请选择--</option>
            <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>
                    <option value="<?php echo $v['product_sort_id'];?>"

                    
            <?php if($vo['product_one_id']==$v['product_sort_id']){ ?>selected="selected"<?php } ?>
            ><?php echo $v['product_sort_name'];?>
                    
            </option>
            <?php } } ?>
          </select></td>
      </tr>
      <tr>
        <td align="right">产品名称：</td>
        <td><input type="text" id="input_alias" name="product_name" size="25" value="<?php echo $vo['product_name'];?>"
                           class="form-control"/></td>
      </tr>
      <tr>
        <td align="right">别名：</td>
        <td><input type="text" name="alias" id="alias" size="25" value="<?php echo $vo['alias'];?>" class="form-control"/></td>
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
<div class="btn2" style="float:left;"> <span>添加附件</span> <input id="fileupload" type="file" name="<?php echo $file_name;?>" delte-url="index.php?a=Product&f=ajax_delete_upload" data-url="index.php?a=Product&f=ajax_upload" data-dir="<?php echo $upload_dir;?>"
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
        <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面标题：</td>
        <td width="84%"><input name="product_seo_title" id="product_seo_title" type="text" class="form-control"
                                       value="<?php echo $vo['product_seo_title'];?>" size="100"></td>
      </tr>
      <tr>
        <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面描述：</td>
        <td width="84%"><textarea name="product_seo_description" cols="40" rows="3"
                                          class="form-control bootstrp_textarea top8"
                                          id="product_seo_description"><?php echo $vo['product_seo_description'];?></textarea></td>
      </tr>
      <tr>
        <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面关键词：</td>
        <td width="84%"><textarea name="product_seo_keyword" cols="30"
                                          class="form-control bootstrp_textarea top8"
                                          id="product_seo_keyword"><?php echo $vo['product_seo_keyword'];?></textarea></td>
      </tr>
      <tr>
        <td align="right">排 序：</td>
        <td><input type="text" name="product_order" size="25" value="<?php echo $vo['product_order'];?>" class="form-control"/></td>
      </tr>
      <tr>
        <td align="right">url指向：</td>
        <td><input type="text" name="url" size="25" value="<?php echo $vo['url'];?>" class="form-control"/></td>
      </tr>
      <tr>
        <td align="right">推荐：</td>
        <td><input type="radio" name="product_commend" value="1"

                    
          <?php if($vo['product_commend']==1){ ?>checked<?php } ?>
          />
          是 <input name="product_commend" type="radio" value="0"

                    
          <?php if($vo['product_commend']==0){ ?>checked<?php } ?>
          />
          否 </td>
      </tr>
      <tr>
        <td align="right">自定义属性：</td>
        <td><textarea name="defined" id="defined" cols="15" rows="5"
                              class="form-control bootstrp_textarea top8"><?php echo $vo['defined'];?></textarea></td>
      </tr>
      <tr>
        <td align="right">分类描述：</td>
        <td style="padding:8px;"><textarea name="product_content" cols="68" rows="6"
                              class="form-control bootstrp_textarea top8"><?php echo $vo['product_content'];?></textarea></td>
      </tr>
      <tr>
        <td><input type="hidden" name="id" value="<?php echo $vo['product_id'];?>"/>
          <input type="hidden" name="name" value="product_id"/></td>
        <td><input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
          <input type="hidden" name="refresh" value="index.php?a=Product&f=index" />
          <input type="hidden" name="sort_id" value="product_one_id" />
          <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=Product&f=index">提交</button></td>
      </tr>
    </table>
  </form>
</div>
<script src="<?php echo $APP_URL;?>/template/Default/kindeditor/kindeditor.js?t=" +new Date()></script> 
<script charset="utf-8" src="<?php echo $APP_URL;?>/template/Default/kindeditor/lang/zh_CN.js"></script> 
<script>
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name="product_content"]', {
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
        require(['./template/Default/js/public/product.js']);
    });
</script>
</body>
</html>