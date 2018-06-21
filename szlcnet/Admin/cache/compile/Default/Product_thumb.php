<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>产品列表</title>
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
            <li><a href="javascript:;">更新产品缩略图</a></li>
        </ul>
    </div>
    <div class="pull-right"><a class="btn btn-primary insetBtn" href="index.php?a=Product&f=add" type="button"><i
            class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a></div>
</div>
<div class="rightinfo">


    <button id="test1" class="form-control">批量生成</button>
    <div id="thumb_list">
        <?php if(is_array($list)){foreach($list as $key=>$v){?>
        <div class="col-sm-2 col-md-2 center thumb_m"><a  data-url="<?php echo $root_url;?><?php echo $v['img'];?>"class="thumbnail showImg">
            <i class="fa fa-cog fa-spin fa-3x"></i>
            <img title="<?php echo $v['name'];?>" src="<?php echo $root_url;?><?php echo $v['img'];?>" onerror="this.src='<?php echo $root_url;?><?php echo $defaultImg;?>';"
                 data-url="<?php echo $v['img'];?>" data-id="<?php echo $v['id'];?>" alt="<?php echo $v['name'];?>">
        </a>
        </div>
        <?php } } ?>
    </div>
    <div class="panel-footer clear" style="margin-bottom: 30px; border: 0;">
        <div class="pull-right">
            <div class="pagin"> <?php echo $page;?></div>
        </div>
    </div>

</div>


<script language="javascript" type="text/javascript">
    var product_thumb = "product_thumb";
    var url = "index.php?a=Product&f=create_thumb";
    var basicUlr = "<?php echo $root_url;?>";
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/public/list.js']);
        require(['./template/Default/js/public/product.js']);
    });
</script>
</body>
</html>