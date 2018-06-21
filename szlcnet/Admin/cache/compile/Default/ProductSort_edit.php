<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>编辑产品分类</title>
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
            <li><a href="javascript:;">编辑产品分类 </a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=ProductSort&f=add" type="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
    </div>
</div>


<div class="formbody">
    <div class="formtitle"><span>新增分类</span></div>
    <form method="post" action="index.php?a=ProductSort&f=update" class="ajax_form">
        <table cellspacing="1" class="myform">
            <tr>
                <td align="right">分类名称：</td>
                <td><input type="text" name="product_sort_name" id="input_alias" size="25" value="<?php echo $vo['product_sort_name'];?>"
                           class="form-control"/></td>
            </tr>
            <tr>
                <td align="right">别名：</td>
                <td><input type="text" name="alias" id="alias" size="25" value="<?php echo $vo['alias'];?>" class="form-control"/></td>
            </tr>
            <tr>
                <td align="right">上级分类：</td>
                <td><select name="parent_id" class="form-control">
                    <option value="0">无</option>
                    <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>
                    <option value="<?php echo $v['product_sort_id'];?>"
                    <?php if($vo['parent_id']==$v['product_sort_id']){ ?>selected="selected"<?php } ?>
                    ><?php echo $v['product_sort_name'];?>
                    </option>
                    <?php } } ?>
                </select></td>
            </tr>
            <tr>
                <td align="right">产品分类配图：</td>
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
<div class="btn2" style="float:left;"> <span>添加附件</span> <input id="fileupload" type="file" name="<?php echo $file_name;?>" delte-url="index.php?a=ProductSort&f=ajax_delete_upload" data-url="index.php?a=ProductSort&f=ajax_upload" data-dir="<?php echo $upload_dir;?>"
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
                <td align="right">排序：</td>
                <td><input type="text" name="product_sort_order" value="<?php echo $vo['product_sort_order'];?>" size="25"
                           class="form-control"/></td>
            </tr>

            <tr>
                <td align="right">推荐：</td>
                <td><input type="text" name="commend" value="<?php echo $vo['commend'];?>" size="25"
                           class="form-control"/></td>
            </tr>

            <tr>
                <td align="right">产品分类描述：</td>
                <td><textarea name="product_sort_content" cols="68" rows="6"
                              class="form-control bootstrp_textarea"><?php echo $vo['product_sort_content'];?></textarea></td>
            </tr>
            <tr>
                <td align="right"><input type="hidden" name="id" value="<?php echo $vo['product_sort_id'];?>"/>
                    <input type="hidden" name="name" value="product_sort_id"/>
                    <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
                </td>
                <td>
                    <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=ProductSort&f=index">提交</button>
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