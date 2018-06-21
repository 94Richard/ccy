<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;" />
<title>官网手机站-首页</title>

<link rel="stylesheet" href="Application/M/Template/default/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="Application/M/Template/default/css/app.css" />
<link rel="stylesheet" type="text/css" href="Application/M/Template/default/css/style.css" />
<script src="Application/M/Template/default/js/mui.min.js"></script>
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

<div class="banner">
		<div id="slider" class="mui-slider" >
			<div class="mui-slider-group mui-slider-loop">
				<!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
				<div class="mui-slider-item mui-slider-item-duplicate">
					<a href="#">
						<img src="Application/M/Template/default/images/banner.jpg">
					</a>
				</div>
				<!-- 第一张 -->
				<div class="mui-slider-item">
					<a href="#">
						<img src="Application/M/Template/default/images/banner.jpg">
					</a>
				</div>
				<!-- 第二张 -->
				<div class="mui-slider-item">
					<a href="#">
						<img src="Application/M/Template/default/images/banner.jpg">
					</a>
				</div>
				<!-- 第三张 -->
				<div class="mui-slider-item">
					<a href="#">
						<img src="Application/M/Template/default/images/banner.jpg">
					</a>
				</div>
				<!-- 第四张 -->
				<div class="mui-slider-item">
					<a href="#">
						<img src="Application/M/Template/default/images/banner.jpg">
					</a>
				</div>
				<!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
				<div class="mui-slider-item mui-slider-item-duplicate">
					<a href="#">
						<img src="Application/M/Template/default/images/banner.jpg">
					</a>
				</div>
			</div>
			<div class="mui-slider-indicator">
				<div class="mui-indicator mui-active"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">
			mui.init({
				swipeBack:true //启用右滑关闭功能
			});
			var slider = mui("#slider");
			document.getElementById("switch").addEventListener('toggle', function(e) {
				if (e.detail.isActive) {
					slider.slider({
						interval: 5000
					});
				} else {
					slider.slider({
						interval: 0
					});
				}
			});
		</script>
</div>
     
<div class="nav">
     <ul>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>App/index"><img src="Application/M/Template/default/images/nav_1.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>App/index">APP应用</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>Website/index"><img src="Application/M/Template/default/images/nav_2.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>Website/index">网站建设</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>Weixin/index"><img src="Application/M/Template/default/images/nav_3.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>Weixin/index">微信开发</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>Mobile/Index"><img src="Application/M/Template/default/images/nav_4.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>Mobile/Index">手机网站</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>Website/index#online_store"><img src="Application/M/Template/default/images/nav_5.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>Website/index#online_store">电商平台</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>System/index"><img src="Application/M/Template/default/images/nav_6.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>System/index">系统定制</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>Extension/Index"><img src="Application/M/Template/default/images/nav_7.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>Extension/Index">G3云推广</a></div>
         </li>
         <li>
             <div class="nav_img"><a href="<?php echo $APP_URL;?>Software/Index"><img src="Application/M/Template/default/images/nav_8.png"></a></div>
             <div class="nav_text"><a href="<?php echo $APP_URL;?>Software/Index">赛富通</a></div>
         </li>
     </ul>
</div>    

<div class="team"><img src="Application/M/Template/default/images/team.jpg"></div>

<div class="profit">
     <h3>做好网站≠网上盈利</h3>
     <h4>网络盈利的几个关键点你HOLD住了吗？</h4>
     <div class="profit_img"><img src="Application/M/Template/default/images/profit.jpg"></div>
</div>

<div class="system">
     <div class="system_top"><img src="Application/M/Template/default/images/system.jpg"></div>
     <ul>
         <li>
             <div class="system_img"><img src="Application/M/Template/default/images/system1.png"></div>
             <div class="system_title">培养您的团队</div>
             <div class="system_text">推广培训  客服培训</div>
         </li>
         <li>
             <div class="system_img"><img src="Application/M/Template/default/images/system2.png"></div>
             <div class="system_title">帮您建立管理体系</div>
             <div class="system_text">输出流程  工作模版</div>
         </li>
         <li>
             <div class="system_img"><img src="Application/M/Template/default/images/system3.png"></div>
             <div class="system_title">获得更多干货与人脉资源</div>
             <div class="system_text">专家辅导  现场沙龙</div>
         </li>
     </ul>
     <div class="system_bottom"><a href="tel:<?php echo $config['tel_400'];?>" class="system_button">点击咨询</a></div>
</div>

<div class="partner">
     <div class="partner_top"><img src="Application/M/Template/default/images/partner.jpg"></div>
     <ul>
         <li><img src="Application/M/Template/default/images/partner1.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner2.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner1.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner2.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner1.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner2.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner1.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner2.jpg"></li>
         <li><img src="Application/M/Template/default/images/partner1.jpg"></li>
     </ul>
</div>


<div class="comment">
     <h3><img src="Application/M/Template/default/images/comment.png">客户点评</h3>
     <ul>
         <li>
             <div class="comment_title"><i><img src="Application/M/Template/default/images/comment1.png"></i><span>飞扬五金 / 胡总</span><em>2016/10/20</em></div>
             <div class="comment_text">这次选择与创驰云合作很愉快，网站设计很满意，感谢创驰云团队的辛勤付出。</div>
         </li>
         <li>
             <div class="comment_title"><i><img src="Application/M/Template/default/images/comment1.png"></i><span>飞扬五金 / 胡总</span><em>2016/10/20</em></div>
             <div class="comment_text">网站做得很漂亮，对比原来的网站简直是天壤之别，真是一分钱一分货。</div>
         </li>
         <li>
             <div class="comment_title"><i><img src="Application/M/Template/default/images/comment1.png"></i><span>飞扬五金 / 胡总</span><em>2016/10/20</em></div>
             <div class="comment_text">这次选择与创驰云合作很愉快，网站设计很满意，感谢创驰云团队的辛勤付出。</div>
         </li>
         <li>
             <div class="comment_title"><i><img src="Application/M/Template/default/images/comment1.png"></i><span>飞扬五金 / 胡总</span><em>2016/10/20</em></div>
             <div class="comment_text">网站做得很漂亮，对比原来的网站简直是天壤之别，真是一分钱一分货。</div>
         </li>
         
     </ul>
</div>


<div class="news">
     <h3><img src="Application/M/Template/default/images/news.png">最新动态</h3>
     <ul>
     <?php if(is_array($news)){foreach($news as $key=>$vo){?>
         <li>
             <div class="news_title"><a href="<?php echo $APP_URL;?>News/detail/id/<?php echo $vo['news_id'];?>.html"><?php echo $vo['news_title'];?></a></div>
             <div class="news_img"><img src="<?php echo $APP_URL;?><?php echo $vo['news_spic'];?>"></div>
             <div class="news_date"><?php echo $vo['news_date'];?></div>
         </li>
     <?php } } ?>       
     </ul>
</div>


<div class="problem">
     <div class="problem_top"><img src="Application/M/Template/default/images/problem.jpg"></div>
     <ul>
     <?php if(is_array($cjwt)){foreach($cjwt as $key=>$vo){?>
         <li><a href="<?php echo $APP_URL;?>News/detail/id/<?php echo $vo['news_id'];?>.html"><?php echo $vo['news_title'];?></a></li>
     <?php } } ?>
     </ul>
</div>

<div class="gg"><img src="Application/M/Template/default/images/gg.jpg"></div>

<div class="process"><img src="Application/M/Template/default/images/process.jpg"></div>







</body>
</html>
