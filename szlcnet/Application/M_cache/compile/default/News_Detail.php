<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>新闻_创驰云网络科技</title>
<link rel="stylesheet" href="<?php echo $APP_URL;?>Application/M/Template/default/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $APP_URL;?>Application/M/Template/default/css/app.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $APP_URL;?>Application/M/Template/default/css/style.css" />
<script src="<?php echo $APP_URL;?>Application/M/Template/default/js/mui.min.js"></script>



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

<div class="newscontact">
     <h3><?php echo $detail['news_title'];?></h3>
     <h4><?php echo $detail['news_date'];?></h4>
     <div class="newscontact-text"><?php echo $detail['news_content'];?></div>
</div>


<div class="pagin"> <?php echo $page;?></div>
<div class="footer_text">技术支持 :  深圳市创驰云网络技术开发有限公司</div>
<div class="footer">
     <ul>
         <li><a href="<?php echo $APP_URL;?>">
             <span><img src="<?php echo $APP_URL;?>Application/M/Template/default/images/footer_1.png"></span>
             <em>网站首页</em></a>
         </li>
         <li><a href="tel:<?php echo $config['tel_400'];?>">
             <span><img src="<?php echo $APP_URL;?>Application/M/Template/default/images/footer_2.png"></span>
             <em>一键拨号</em></a>
         </li>
         <li><a href="<?php echo $APP_URL;?>About/dh">
             <span><img src="<?php echo $APP_URL;?>Application/M/Template/default/images/footer_3.png"></span>
             <em>一键导航</em></a>
         </li>
         <li><a href="<?php echo $APP_URL;?>About/contact">
             <span><img src="<?php echo $APP_URL;?>Application/M/Template/default/images/footer_4.png"></span>
             <em>联系我们</em></a>
         </li>
     </ul>
</div>

</body>
</html>
