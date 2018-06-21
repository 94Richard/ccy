<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $meta['basic_seo_title'];?></title>
<meta name="description" content="<?php echo $meta['basic_seo_description'];?>" />
<meta name="keywords" content="<?php echo $meta['basic_seo_keyword'];?>" />
<script src="<?php echo $OSS_URL;?>js/jquery-1.2.6.min.js"></script>
<!--<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Font.css"/>
--><link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Public.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/animate.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/DesignButton.css"/>
<script src="<?php echo $OSS_URL;?>js/wow.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/headroom.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/menu.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/layer/layer.js" type="text/javascript"></script>


 
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/About.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Payment.css"/>
<script type="text/javascript" src="<?php echo $OSS_URL;?>js/niceScroll.js"></script>
</head>
<body>
﻿<header id="header">
  <div class="headDiv">
    <div class="t1">
      <dl>
        <dt class="yahei"><img src="<?php echo $OSS_URL;?>img/t_phone.jpg" class="t_phone"  /><span>全国服务热线：<strong><?php echo $web['tel_400'];?></strong></i> </dt>
        <dd> <a href="<?php echo $APP_URL;?>Recruit/Index">人才招聘</a> <a href="<?php echo $APP_URL;?>News/Index">新闻中心</a><a href="<?php echo $APP_URL;?>About/Index">关于我们</a>
      </dl>
    </div>
    <div class="head">
      <p class="overimg logo"><a href="<?php echo $APP_URL;?>"> <img src="<?php echo $OSS_URL;?>img/logo.png"> </a> <i
                    class="light"></i></p>
      <div class="nav">
        <ul>
          <li><a href="<?php echo $APP_URL;?>">首页</a></li>
          <li><a href="<?php echo $APP_URL;?>Marketing/Index">营销型网站</a></li>
          <li><a href="<?php echo $APP_URL;?>Extension/Index">网络推广</a>
            <div style="display: none;" class="exeion">
              <ul>
                <?php if(is_array($extension)){foreach($extension as $k=>$vo){?>
                  <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
                <?php } } ?>
              </ul>
            </div>
          </li>
          <li><a href="<?php echo $APP_URL;?>Mobile/Index">移动开发</a>
            <div style="display: none;" class="exeion">
              <ul>
                <?php if(is_array($basic_mobile)){foreach($basic_mobile as $k=>$vo){?>
                  <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
                <?php } } ?>
              </ul>
            </div>
          </li>
          <li><a href="<?php echo $APP_URL;?>Web/Scheme">创意策划</a></li>
          <li><a href="<?php echo $APP_URL;?>Case/Index">经典案例</a></li>
          <li><a href="javascript:;">产品服务</a>
            <div style="display: none;" class="submenu yahei">
              <dl>
                <dt>网站建设<span><img src="<?php echo $OSS_URL;?>img/nav_img1.png"></span></dt>
                <dd>
                  <ul>
                    <li><a href="<?php echo $APP_URL;?>web/Index" title="官网建设">官网建设</a></li>
                    <li><a href="<?php echo $APP_URL;?>web/Index#online_store" title="网上商城">网上商城</a></li>
                    <li><a href="<?php echo $APP_URL;?>web/Index#Interactive_Marketing" title="互动营销">互动营销</a> </li>
                    <li><a href="<?php echo $APP_URL;?>web/Index#Brand_Website" title="品牌型网站">品牌型网站</a></li>
                    <li><a href="<?php echo $APP_URL;?>web/Index#information_network" title="内外信息网">内外信息网</a> </li>
                    <li style="border-bottom:none;"><a href="<?php echo $APP_URL;?>web/Index#Industry_Portal" title="行业门户">行业门户</a></li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt>移动应用<span><img src="<?php echo $OSS_URL;?>img/nav_img2.png"></span></dt>
                <dd>
                  <ul>
                    <?php if(is_array($basic_mobile)){foreach($basic_mobile as $k=>$vo){?>
                      <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
                    <?php } } ?>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt>基础业务<span><img src="<?php echo $OSS_URL;?>img/nav_img3.png"></span></dt>
                <dd>
                  <ul>
                    <?php if(is_array($basic_Business)){foreach($basic_Business as $k=>$vo){?>
                      <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
                    <?php } } ?>
                  </ul>
                </dd>
              </dl>
              <dl style="margin-right:0; border-right:none">
                <dt>配套产品<span><img src="<?php echo $OSS_URL;?>img/nav_img4.png"></span></dt>
                <dd>
                  <ul>
                    <?php if(is_array($basic_system)){foreach($basic_system as $k=>$vo){?>
                      <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
                    <?php } } ?>
                  </ul>
                </dd>
              </dl>
            </div>
          </li>
          <li><a href="<?php echo $APP_URL;?>Help/VirtualHost">帮助中心</a></li>
          <li><a href="<?php echo $APP_URL;?>About/Contact">联系我们</a></li>
        </ul>
        <div style="left: 0px;" id="buoy"></div>
      </div>
    </div>
  </div>
</header>
<script type="text/javascript">
		current="<?php echo $current;?>";
    jQuery.nicenav(300, "<?php echo $current;?>");  //滑竿菜单
</script> 

<div id="contactUsBg"> </div>

<!-- 付款方式、人才招聘 -->
<div class="qing " style=" margin-top:-101px;">
  <div class="abo-gy-ti0" style="padding-bottom:0;">
    <table border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td height="104">
            <?php if(is_array($aboutList)){foreach($aboutList as $key=>$about){?>
    <a href="<?php echo $APP_URL;?><?php echo $about['url'];?>" <?php if($about['basic_id']==$current_about_id){ ?>class="abonn"<?php }else{ ?>class="abott1"<?php } ?>><span class="abott1"><?php echo $about['basic_name'];?></span><span class="abott2"><?php echo $about['basic_name'];?></span></a>
           <?php } } ?>
        </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="abo-gy-kk">
    <table class="abobg2" bgcolor="#f0f0f0" border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody>
        <tr>
          <td width="25%"><div class="qing abk"><img original="/Public/Home/images/fuk-k10.png" src="<?php echo $OSS_URL;?>img/fuk-k10.png" class="abk10" width="100%"><img original="/Public/Home/images/fuk-k1.jpg" src="<?php echo $OSS_URL;?>img/fuk-k1.jpg" class="abk1" width="100%"></div></td>
          <td width="75%" valign="top"><div tabindex="5000" style="overflow: hidden;" class=" zhifu" id="sucai0">
          
          <?php if(is_array($backList)){foreach($backList as $key=>$back){?>
              <div class="fkfs">
                <div class="fkfsn">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td><div class="fkfsn-ti"><img src="<?php echo $APP_URL;?><?php echo $back['product_spic'];?>" height="60" width="210"></div>
                          <div class="fkfsn-nr"><?php echo $back['product_content'];?>
                          </div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
             <?php } } ?>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="choice foot_tl">
  <h3>CONTACT</h3>
  <h4>选择我们没有错</h4>
  <h5>我们的理念:“诚信为本、实力为先，全心全意为客户”！<br />我们公司秉承客户至上、服务至上的经营理念，以卓越的IT服务品质、专业的技术服务实力、技术精湛的客户服务团队，保障客户在信息时代的高速路上驰骋！<br />以稳固、发展、忠诚、高效、团结与创新的精神，尊重人才注重技术，使客户在享受信息科技发展最新成果的同时不断获得最大的收益！</h5>
  <div class="choice_title">
    <p>咨询热线</p>
    <span class="foot_tel">[ <?php echo $web['tel_400'];?> ]</span> </div>
</div>
<div class="footer1 foot_tl">
  <div class="footer_top">
    <div class="footer_nav">
      <ul>
        <li>网站建设
          <ul>
            <li><a href="<?php echo $APP_URL;?>web/Index" title="官网建设">官网建设</a></li>
            <li><a href="<?php echo $APP_URL;?>web/Index#online_store" title="网上商城">网上商城</a></li>
            <li><a href="<?php echo $APP_URL;?>web/Index#Interactive_Marketing" title="互动营销">互动营销</a> </li>
            <li><a href="<?php echo $APP_URL;?>web/Index#Brand_Website" title="品牌型网站">品牌型网站</a></li>
            <li><a href="<?php echo $APP_URL;?>web/Index#information_network" title="内外信息网">内外信息网</a> </li>
            <li style="border-bottom:none;"><a href="<?php echo $APP_URL;?>web/Index#Industry_Portal"
                                                                           title="行业门户">行业门户</a></li>
          </ul>
        </li>
        <li>基础业务
          <ul>
            <?php if(is_array($basic_Business)){foreach($basic_Business as $k=>$vo){?>
              <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
            <?php } } ?>
          </ul>
        </li>
        <li>移动应用
          <ul>
            <?php if(is_array($basic_mobile)){foreach($basic_mobile as $k=>$vo){?>
              <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
            <?php } } ?>
          </ul>
        </li>
        <li>配套产品
          <ul>
            <li><a href="">建站优势</a></li>
            <li><a href="">网站改版</a></li>
            <li><a href="">全网站建设</a></li>
            <li><a href="">手机网站</a></li>
            <li><a href="">微信网站</a></li>
          </ul>
        </li>
        <li>网络推广
          <ul>
            <?php if(is_array($extension)){foreach($extension as $k=>$vo){?>
              <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
            <?php } } ?>
          </ul>
        </li>
        <li>新闻中心
          <ul>
            <?php if(is_array($news_footer)){foreach($news_footer as $key=>$vos){?>
              <li><a href="<?php echo $APP_URL;?>News/Index/newslist/<?php echo $vos['news_sort_id'];?>.html"><?php echo $vos['news_sort_name'];?></a></li>
            <?php } } ?>
          </ul>
        </li>
        <li>关于公司
          <ul>
            <?php if(is_array($basic_about)){foreach($basic_about as $k=>$vo){?>
              <li><a href="<?php echo $APP_URL;?><?php echo $vo['url'];?>"  title="<?php echo $vo['basic_name'];?>"><?php echo $vo['basic_name'];?></a></li>
            <?php } } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer_bottom">Copyright © 2016 创驰云网络 ALL RIGHTS RESERVED | <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $web['web_copyright'];?></a></div>
</div>
<?php if($current!=4 && $noser==false && $current!=5 ){ ?>
  <link rel="stylesheet" href="<?php echo $OSS_URL;?>css/service.css"/>
  <div class="server" id="gw_ser">
    <p class="switch_ser cursor"> </p>
    <div class="s_list" id="s_list">
      <p class="ewmApp" id="tms_ews"><img src="<?php echo $OSS_URL;?>img/ewm.png" /></p>
      <div class="authority_list" id="authority_list">
        <ul style="margin-bottom:50px;">
          <li><a class="tits" href="javascript:;" class="inactive">业务咨询</a>
            <ul>
              <li><i class="fa fa-qq"></i><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=317361652&site=qq&menu=yes">317361652</a></li>
              <li><i class="fa fa-phone-square"></i>0755-33059401</li>
            </ul>
          </li>
          <li><a class="tits" href="javascript:;" class="inactive">技术支持</a>
            <ul>
              <li><i class="fa fa-qq"></i><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1109186819&site=qq&menu=yes">1109186819</a></li>
              <li><i class="fa fa-phone-square"></i>13570816465</li>
            </ul>
          </li>
          <li><a class="tits" href="javascript:;" class="inactive">售后服务</a>
            <ul style="margin-bottom:70px;">
              <li><i class="fa fa-qq"></i><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1262968527&site=qq&menu=yes">1262968527</a></li>
              <li><i class="fa fa-phone-square"></i>0755-33057080</li>
            </ul>
          </li>
        </ul>
      </div>
      <P class="_log"></P>
      <p class="p_tx">售后服务咨询</p>
      <div class="im-footer" style="position:relative">
        <div class="weixing-container">
          <div class="weixing-show none">
            <div class="weixing-txt">微信扫一扫<br>
              关注创驰云网络<br>
              获取更多解决方案</div>
            <img class="weixing-ma" src="<?php echo $OSS_URL;?>img/weixing-ma.jpg">
            <div class="weixing-sanjiao"></div>
            <div class="weixing-sanjiao-big"></div>
          </div>
        </div>
        <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
        <div style="clear:both"></div>
      </div>
    </div>
  </div>
<?php } ?>

<script type="text/javascript">
 //整站无图处理
    jQuery.each(jQuery("img"), function (i, n) {
        jQuery(n).error(function () { n.src = '<?php echo $APP_URL;?><?php echo $defaultImg;?>'; });
        n.src = n.src;
    });
</script>
<!--<div style="display: none;" class="toTop"></div>
-->
<div id="g3_brand_all" style="position: fixed;left:0;bottom:0"><script type="text/javascript" src="http://g3-zzz474.a.g4wei.com/dyb/ckflv/js/g3dyb.js?t=400-186-9596&m=1&f=1&u=6&p=1&s=0&c=0" charset="utf-8"></script></div>


</body>
</html>
