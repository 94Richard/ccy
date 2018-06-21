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
<title>系统开发_创驰云网络科技</title>
<link rel="stylesheet" href="../Application/M/Template/default/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="../Application/M/Template/default/css/app.css" />
<link rel="stylesheet" type="text/css" href="../Application/M/Template/default/css/style.css" />
<script src="../Application/M/Template/default/js/mui.min.js"></script>
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

<div class="provide">
     <h3>我们能为您提供什么服务？</h3>
     <ul>
         <li>
             <div class="provide-img"><img src="http://file.szlcnet.com/img/provide_1.jpg"></div>
             <div class="provide-title">OA办公系统</div>
             <div class="provide-text">-让工作更简单</div>
             <div class="provide-text">-提高工作效率</div>
         </li>
         
         <li>
             <div class="provide-img"><img src="http://file.szlcnet.com/img/provide_2.jpg"></div>
             <div class="provide-title">客户关系管理系统</div>
             <div class="provide-text">-销售自动化、营销自动化；</div>
             <div class="provide-text">-进销存管理、集成及扩展、完美的售后</div>
         </li>
         
         <li>
             <div class="provide-img"><img src="http://file.szlcnet.com/img/provide_3.jpg"></div>
             <div class="provide-title">商城系统</div>
             <div class="provide-text">-随时随地移动办公</div>
             <div class="provide-text">-微信、微博、QQ空间全网营销 聚合粉丝经济</div>
         </li>
         
         <li>
             <div class="provide-img"><img src="http://file.szlcnet.com/img/provide_4.jpg"></div>
             <div class="provide-title">分销系统</div>
             <div class="provide-text">-更多销路，更多收益；</div>
             <div class="provide-text">-省成本，不费劲</div>
         </li>
     </ul>
</div>

<div class="process"><img src="http://file.szlcnet.com/img/process.jpg"></div>

<div class="have">
  <h3>优秀的系统应具备</h3>
  <ul>
    <li>
      <div class="have-img"><img src="http://file.szlcnet.com/img/have_1.jpg"></div>
      <div class="have-title">人性化</div>
      <div class="have-text">操作方便，用户体验顺畅，多方协同，数据同步，系统自动化提醒，自动化识别</div>
    </li>
    <li>
      <div class="have-img"><img src="http://file.szlcnet.com/img/have_2.jpg"></div>
      <div class="have-title">数据化</div>
      <div class="have-text">系统数据统计，数据分析为决策提供支持让信息从纸质变为数字化便于保管利用更加高效</div>
    </li>
    <li>
      <div class="have-img"><img src="http://file.szlcnet.com/img/have_3.jpg"></div>
      <div class="have-title">移动化</div>
      <div class="have-text">结合微信企业号，可做到信息，业务移动端协同，关键业务手机即可处理，关键提醒通知手机</div>
    </li>
    <li>
      <div class="have-img"><img src="http://file.szlcnet.com/img/have_4.jpg"></div>
      <div class="have-title">持久化</div>
      <div class="have-text">历史数据持久化安全系统可升级，可持久化运作</div>
    </li>
  </ul>
</div>

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