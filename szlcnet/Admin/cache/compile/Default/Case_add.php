<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>添加案例</title>
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
            <li><a href="javascript:;">添加案例</a></li>
        </ul>
    </div>
    <div class="pull-right"><a class="btn btn-primary insetBtn" href="index.php?a=Case&f=add" type="button"><i
            class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a></div>
</div>
<div class="formbody">
    <div class="formtitle"><span>添加案例</span></div>
    <form method="post" action="index.php?a=Case&f=insert" class="ajax_form" id="caseFrom" enctype="multipart/form-data">
        <table cellspacing="1" class="myform">
            <tr>
                <td align="right">所属分类：</td>
                <td><select name="case_one_id" class="form-control selectSubmit">
                    <option value="0">--请选择--</option>
                    <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>

                    <option value="<?php echo $v['case_sort_id'];?>"> <?php echo $v['case_sort_name'];?></option>
                    <?php } } ?>
                </select></td>
            </tr>
            <tr>
                <td align="right">案例名称：</td>
                <td><input type="text" id="input_alias" name="case_name" size="25" value="<?php echo $vo['case_name'];?>"
                           class="form-control"/></td>
            </tr>
            <tr>
                <td align="right">别名：</td>
                <td><input type="text" name="alias" id="alias" size="25" value="<?php echo $vo['alias'];?>" class="form-control"/></td>
            </tr>
            <tr>
                <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面标题</td>
                <td width="84%"><input name="case_seo_title" id="case_seo_title" type="text" class="form-control"
                                       value="<?php echo $vo['case_seo_title'];?>" size="100"></td>
            </tr>
            <tr>
                <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面描述</td>
                <td width="84%"><textarea name="case_seo_description" cols="40" rows="3"
                                          class="form-control bootstrp_textarea top8"
                                          id="case_seo_description"><?php echo $vo['case_seo_description'];?></textarea></td>
            </tr>
            <tr>
                <td width="16%" align="right"><font color="#FF0000">*</font>SEO页面关键词</td>
                <td width="84%"><textarea name="case_seo_keyword" cols="30"
                                          class="form-control bootstrp_textarea top8"
                                          id="case_seo_keyword"><?php echo $vo['case_seo_keyword'];?></textarea></td>
            </tr>
            <tr>
                <td align="right">排 序：</td>
                <td><input type="text" name="case_order" size="25" class="form-control"/></td>
            </tr>
            <tr>
                <td align="right">推荐：</td>
                <td><input type="radio" name="case_commend" value="1"/>
                    是
                    <input name="case_commend" type="radio" value="0" checked>
                    否
                </td>
            </tr>
            
               <tr>
                <td width="16%" align="right"><font color="#FF0000">*</font>案例说明：</td>
                <td width="84%"><textarea name="case_des" cols="50" class="form-control bootstrp_textarea top8"
                                          id="case_des"></textarea></td>
            </tr>
            
            <tr>
                <td align="right">案例描述：</td>
                <td style="padding:8px;"><textarea name="case_content" cols="68" rows="6"
                                                   class="form-control bootstrp_textarea top8"><?php echo $vo['case_content'];?></textarea>
                </td>
            </tr>
            <tr>
                <td align="right">配图：</td>
                <td><input type="file" name="case_spic_file" id="case_spic_file"
                           style="display:inline-block; float:left;">
                    <input type="hidden" name="dir" value="<?php echo $file_name;?>">
                    <input type="button" value="上传图片" id="case_btn">
                    <input type="hidden" id="case_hidden" name="case_spic"/>

                    <div class="imglist" id="imglist"></div>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id"/>
                    <input type="hidden" name="name" value="case_id"/></td>
                <td>
                    <input type="hidden" name="language" value="<?php echo $_COOKIE[LANG];?>"/>
                     <input type="hidden" name="refresh" value="index.php?a=Case&f=index" />
          		<input type="hidden" name="sort_id" value="case_one_id" />
          
                    <button type="button" class="btn btn-primary ajax_btn" data-url="index.php?a=Case&f=index">提交</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script src="<?php echo $APP_URL;?>/template/Default/kindeditor/kindeditor.js?t=" +new Date()></script>
<script charset="utf-8" src="<?php echo $APP_URL;?>/template/Default/kindeditor/lang/zh_CN.js"></script>
<script>
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name="case_content"]', {
            allowFileManager: true,
            width: "100%", //新增器的宽度为70%
            height: "450px", //新增器的高度为100px
            afterBlur: function () {
                this.sync();
            }
        });

    });
</script>

<script language="javascript" type="text/javascript">
    var caseAjax_url = "index.php?a=Case&f=case_ajax_upload";
    var caseAJax_delete_url = "index.php?a=Case&f=ajax_delete_upload";
    var web_dir = "<?php echo $web_dir;?>";
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/public/edit.js']);
        require(['./template/Default/js/public/case.js']);
        require(['./template/Default/js/public/product.js']);
    });
</script>
</body>
</html>