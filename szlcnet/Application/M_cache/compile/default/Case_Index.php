<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="创驰云网络科技">
<meta name="description" content="创驰云网络科技">
<meta name="author" content="创驰云网络科技">
<title>案例中心_创驰云网络科技</title>
<link rel="stylesheet" href="../Application/M/Template/default/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="../Application/M/Template/default/css/app.css" />
<link rel="stylesheet" type="text/css" href="../Application/M/Template/default/css/style.css" />
<script src="../Application/M/Template/default/js/mui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Application/M/Template/default/css/base.css"/>
<link rel="stylesheet" type="text/css" href="../Application/M/Template/default/css/pp.css"/>
<script src="../Application/M/Template/default/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<header class="header">
	   <input type="text" placeholder="请输入查找内容" class="search">

		<a id="menu" class="menu" href="#topPopover"></a>
        <div id="topPopover" class="mui-popover">
			<div class="mui-popover-arrow"></div>
			<div class="mui-scroll-wrapper">
				<div class="mui-scroll">
					<ul class="mui-table-view">
						<li class="mui-table-view-cell"><a href="<?php echo $APP_URL;?>">首页</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo $APP_URL;?>About/index">关于我们</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo $APP_URL;?>News/index">新闻中心</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo $APP_URL;?>Scheme/Index">创意策划</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo $APP_URL;?>Case/index">经典案例</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo $APP_URL;?>About/contact">联系我们</a>
						</li>						
					</ul>
				</div>
			</div>

		</div>
</header>


<div class="case">

<div class="wrapper">
  <ul class="wall">
  <?php if(is_array($list)){foreach($list as $key=>$vo){?>
    <li class="article">
        <div class='case_img'><a href="<?php echo $APP_URL;?>Case/detail/id/<?php echo $vo['case_id'];?>.html"><img src="<?php echo $APP_URL;?><?php echo $vo['case_spic'][0];?>" alt="<?php echo $vo['case_name'];?>"></a></div>
        <div class='case_title'><a href="<?php echo $APP_URL;?>Case/detail/id/<?php echo $vo['case_id'];?>.html"><?php echo $vo['case_name'];?></a></div>
    </li>
  <?php } } ?>
 </ul>
</div>
<script src="../Application/M/Template/default/js/jaliswall.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
		$(function(){
			$('.wall').jaliswall({ item: '.article' });
		});
	</script>
      
     
    </div>
<div class="pagin"> <?php echo $page;?></div>
<div class="footer_text">技术支持 :  深圳市创驰云网络技术开发有限公司</div>



<div class="footer">
     <ul>
         <li><a href="<?php echo $APP_URL;?>">
             <span><img src="../Application/M/Template/default/images/footer_1.png"></span>
             <em>网站首页</em></a>
         </li>
         <li><a href="tel:<?php echo $config['tel_400'];?>">
             <span><img src="../Application/M/Template/default/images/footer_2.png"></span>
             <em>一键拨号</em></a>
         </li>
         <li><a href="<?php echo $APP_URL;?>About/dh">
             <span><img src="../Application/M/Template/default/images/footer_3.png"></span>
             <em>一键导航</em></a>
         </li>
         <li><a href="<?php echo $APP_URL;?>About/contact">
             <span><img src="../Application/M/Template/default/images/footer_4.png"></span>
             <em>联系我们</em></a>
         </li>
     </ul>
</div>
</body>
</html>
