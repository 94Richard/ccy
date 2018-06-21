<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $meta['basic_seo_title'];?></title>
<meta name="description" content="<?php echo $meta['basic_seo_description'];?>" />
<meta name="keywords" content="<?php echo $meta['basic_seo_keyword'];?>" />
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Wechat.css"/>
<script src="<?php echo $OSS_URL;?>js/jquery-1.2.6.min.js"></script>
<!--<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Font.css"/>
--><link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Public.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/animate.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/DesignButton.css"/>
<script src="<?php echo $OSS_URL;?>js/wow.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/headroom.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/menu.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/layer/layer.js" type="text/javascript"></script>


 
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

<div class="wechat_banner"></div>
<div class="platform">
  <h3>微信公众号平台开发服务</h3>
  <div class="platwhy">
    <div class="whyleft">
      <h3>为什么要做微信公众平台开发？</h3>
      <ul>
        <li><span>1</span><em>移动互联网趋势：移动互联网用户已经超过传统互联网用户，成为了目前的主流；</em></li>
        <li><span>2</span><em>大流量切入口：7亿微信用户，巨大的流量入口；</em></li>
        <li><span>3</span><em>用户粘性强：人人都在使用微信，微信的用户粘性和使用更强；</em></li>
        <li><span>4</span><em>人性化的营销方式：是否接受信息全由用户做主；</em></li>
        <li><span>5</span><em>高效CRM管理工具：微信粉丝即用户、分门别类管理用户；</em></li>
        <li><span>6</span><em>时尚的产品销售渠道：微信助企业实现多元化营销；</em></li>
        <li><span>7</span><em>全面营销趋势：微信营销是众多企业的选择；</em></li>
      </ul>
    </div>
    <div class="whyright"><img src="<?php echo $OSS_URL;?>img/wechat_1.jpg"></div>
  </div>
  <div class="platadv">
    <div class="advleft"><img src="<?php echo $OSS_URL;?>img/wechat_2.jpg"></div>
    <div class="advright">
      <h3>企业开发微信公众号的优势</h3>
      <ul>
        <li><span>1</span>熟人网络，大众传播，传播有效性更高；</li>
        <li><span>2</span>可随时随地提供信息和服务，信息和服务能够到达的时间更长；</li>
        <li><span>3</span>营销和服务的定位更精准；</li>
        <li><span>4</span>富媒体内容，便于分享；</li>
        <li><span>5</span>微信公众平台，一对多传播，信息高达到率；</li>
        <li><span>6</span>基于LBS(Location Based Services)，特殊的地理位置服务；</li>
        <li><span>7</span>便利的互动性，信息推送迅速实时更新；</li>
        <li><span>8</span>营销成本更低，可持续性更强；</li>
      </ul>
    </div>
  </div>
</div>
<div class="services">
  <h3>微信公众号<em> 4大 </em>平台开发服务 </h3>
  <ul>
    <li>
      <div class="services_img"><img src="<?php echo $OSS_URL;?>img/services_1.jpg"></div>
      <div class="services_title">微信服务号开发</div>
      <div class="services_text">微信服务号开发，为企业、组织定制功能更齐全、更强大的公众号服务平台，一次开发，永久提升企业和组织的业务能力和用户管理能力，同时让营销变得更简单。</div>
    </li>
    <li>
      <div class="services_img"><img src="<?php echo $OSS_URL;?>img/services_2.jpg"></div>
      <div class="services_title">微信订阅号开发</div>
      <div class="services_text">微信订阅号开发，为企业、组织定制功能更齐全、更强大的公众号服务平台，一次开发，永久提升企业和组织的业务能力和用户管理能力，同时让营销变得更简单。</div>
    </li>
    <li>
      <div class="services_img"><img src="<?php echo $OSS_URL;?>img/services_3.jpg"></div>
      <div class="services_title">微信应用号开发</div>
      <div class="services_text">微信应用号将成为未来的风口，你还在等待、犹豫什么？为什么不走在时代、技术的前沿？商侣软件为企业提供微信应用号定制开发服务，为企业赢得千亿级市场。</div>
    </li>
    <li>
      <div class="services_img"><img src="<?php echo $OSS_URL;?>img/services_4.jpg"></div>
      <div class="services_title">微信企业号开发</div>
      <div class="services_text">微信企业号开发，以企业、组织需求为前提，为企业、组织建立高效、简单、顺畅的对内（企业员工）对外（上下游供应链及企业应用）协作联系。</div>
    </li>
  </ul>
</div>
<div class="feature">
  <h2>微信公众平台 <em>7大</em> 特色功能开发</h2>
  <div class="feature1">
    <h3><img src="<?php echo $OSS_URL;?>img/feature1_h3.jpg"></h3>
    <div class="feature1_text">企业在微信公众平台搭建在线销售的商城店铺，实现真正的移动电商；让移动端手机快捷地接触品牌产品，无需登录，仅填写地址，即时支付，让消费者体验最省心的购物流程；实现商家与客户的在线互动，即时推送最新商品信息给微信用户；实现移动在线产品销售，下单甚至直接支付功能。<br/>
      <span>基于微信公众号开发的微商城优势：</span> 1、用户市场规模大<br/>
      2、投入成本低<br/>
      3、易于传播和推广<br/>
      4、用户粘性高<br/>
      5、销售活动多样化</div>
    <div class="feature1_img"><img src="<?php echo $OSS_URL;?>img/feature1.jpg"></div>
  </div>
  <div class="feature2">
    <div class="feature2_text">
      <h3><img src="<?php echo $OSS_URL;?>img/feature2_h3.jpg"></h3>
      微分销系统帮助企业开启全新的分销模式，打造以分销商为中心的全新微信分销体验，让粉丝实时有效的获取朋友圈流量并快速产生分销购买再实现分佣，帮助分销商以低投入来获取高利润的回报。无限极分销，三级分佣的模式，每个分销商都可以自由发展下级分销商，会员即分销商。微分销适用于多种行业领域，凭借开店成本低、开店速度快、智能化管理更便捷等特点被成千上万家企业所运用。</div>
    <div class="feature2_img"><img src="<?php echo $OSS_URL;?>img/feature2.jpg"></div>
  </div>
  <div class="feature3">
    <div class="feature3_text">
      <h3><img src="<?php echo $OSS_URL;?>img/feature3_h3.jpg"></h3>
      微官网是企业实力、企业品牌形象的象征，在激烈的行业竞争中，企业只有保持创新、不断创造才能立于不败之地；通过开发微官网，由公众号菜单进入企业微官网页面，展示高端的企业品牌形象，同时微信公众号也是一个更丰富的手机端品牌官网入口。 </div>
    <div class="feature3_img"><img src="<?php echo $OSS_URL;?>img/feature3.jpg"></div>
  </div>
  <div class="feature4">
    <div class="feature4_text">
      <h3><img src="<?php echo $OSS_URL;?>img/feature4_h3.jpg"></h3>
      商侣软件为顾客提供多微营销功能开发服务，包括摇一摇、抽奖、红包、大转盘，投票活动、刮刮乐、砸金蛋等多种营销工具，您可针对企业品牌文化、产品特征，设计微信互动活动，引发用户对商家微信的兴趣及关注度，以达到营销目的。</div>
    <div class="feature4_img"><img src="<?php echo $OSS_URL;?>img/feature4.jpg"></div>
  </div>
  <div class="feature5">
    <div class="feature5_text">
      <h3><img src="<?php echo $OSS_URL;?>img/feature5_h3.jpg"></h3>
      粉丝注册成为微信会员，对于顾客可以获得会员特权，对商家可以收集顾客信息进行CRM客户管理，同时，打通企业线下实体会员系统和微信公众号的会员体系，真正实现无缝对接，可实现在线下订单、积分查询等各种操作。 </div>
    <div class="feature5_img"><img src="<?php echo $OSS_URL;?>img/feature5.jpg"></div>
  </div>
  <div class="feature6">
    <div class="feature6_text">
      <h3><img src="<?php echo $OSS_URL;?>img/feature6_h3.jpg"></h3>
      微信支付已经成为了移动支付的主流支付方式，微信支付功能开发，通过捆绑银行卡实现多种方式微信支付，为客户提供了便捷的支付方式，更好的为企业商家促进销售。</div>
    <div class="feature6_img"><img src="<?php echo $OSS_URL;?>img/feature6.jpg"></div>
  </div>
  <div class="feature7">
    <div class="feature7_text">
      <h3><img src="<?php echo $OSS_URL;?>img/feature7_h3.jpg"></h3>
      接入与地理位置相关的功能模块，联结线上线下，增强真实体验感，对于商家来说，基于用户的位置推送周边的广告信息，一方面将极大的提高广告的精准营销程度；另一方面，商家可以结合LBS推出一些促销活动，如对那些经常签到的顾客提供优惠等；应用形式如：地图导航，附近门店等。</div>
    <div class="feature7_img"><img src="<?php echo $OSS_URL;?>img/feature7.jpg"></div>
  </div>
</div>
<a name="guestBook">
<div class="information">
  <div class="information_top">
    <h3><?php echo $guest_title;?></h3>
    <h4><?php echo $guest_instructions;?></h4>
  </div>
  <form method="post" action="<?php echo $APP_URL;?>Msg/extensionMsg" class="ajax_form" id="ajax_form">
    <div class="information_center">
      <table border="0" width="1198">
        <tr height="45">
          <td width="135" align="right"><label><i>*</i>公司名称</label></td>
          <td width="400"><input name="company" type="text" id="text" class="information_input"
                                               nullmsg="请输入公司名称" must="must"/></td>
          <td width="200" align="right"><label><i>*</i>手机号码</label></td>
          <td><input type="tel" name="tel" class="information_input" id="mobile" must="must"
                                   nullmsg="请输入您的手机号码"/></td>
        </tr>
        <tr height="45" style="color:#aeaeae; text-indent:10px;">
          <td>&nbsp;</td>
          <td>如：深圳市创驰云网络技术开发有限公司</td>
          <td>&nbsp;</td>
          <td>如：15817460855（前无需加0）</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr height="45">
          <td align="right"><label><i>*</i>主营产品</label></td>
          <td><input name="product" class="information_input" type="text" must="must"
                                   nullmsg="请输入您公司的主营产品项目!"></td>
          <td align="right"><label>您的QQ</label></td>
          <td><input name="qq" class="information_input" type="text"></td>
        </tr>
        <tr height="45" style="color:#aeaeae; text-indent:10px;">
          <td>&nbsp;</td>
          <td>如：互联网</td>
          <td>&nbsp;</td>
          <td>如：317361652</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr height="45">
          <td align="right"><label><i>*</i>联系人</label></td>
          <td><input name="name" class="information_input" type="text" must="must"
                                   nullmsg="请输入姓名，以方便我们联系到您!"></td>
          <td align="right"><label><i>*</i>常用邮箱</label></td>
          <td><input name="email" class="information_input" type="text" nullmsg="请输入您的邮箱地址" must="must"></td>
        </tr>
        <tr height="45" style="color:#aeaeae; text-indent:10px;">
          <td>&nbsp;</td>
          <td>如：石小姐</td>
          <td>&nbsp;</td>
          <td>如：shiliu@szlcnet.com</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr height="45">
          <td align="right"><label><i>*</i>联系电话</label></td>
          <td><input name="phone" class="information_input" type="text" nullmsg="请输入您的联系电话" must="must"></td>
          <td align="right"><label>公司网址</label></td>
          <td><input name="website" class="information_input" type="text"></td>
        </tr>
        <tr height="45" style="color:#aeaeae; text-indent:10px;">
          <td>&nbsp;</td>
          <td>如：0755-33059400</td>
          <td>&nbsp;</td>
          <td>如：www.szlcnet.com</td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <input type="hidden" value="<?php echo $subject;?>" name="subject" />
      <div class="information_bottom"> <a class="team_button Design_a" id="submitAjax_a">提交</a> </div>
    </div>
  </form>
</div>
</a> <div class="choice foot_tl">
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
