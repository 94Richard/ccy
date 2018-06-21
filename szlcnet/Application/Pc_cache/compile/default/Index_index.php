<?php if(!defined('APP_NAME')) exit();?>
﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $meta['basic_seo_title'];?></title>
<meta name="description" content="<?php echo $meta['basic_seo_description'];?>" />
<meta name="keywords" content="<?php echo $meta['basic_seo_keyword'];?>" /><script src="<?php echo $OSS_URL;?>js/jquery-1.2.6.min.js"></script>
<!--<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Font.css"/>
--><link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Public.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/animate.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/DesignButton.css"/>
<script src="<?php echo $OSS_URL;?>js/wow.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/headroom.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/menu.js" type="text/javascript"></script>
<script src="<?php echo $OSS_URL;?>js/layer/layer.js" type="text/javascript"></script>


 
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/index.css"/>
<script type='text/javascript' src='http://91.kaweiso.com/file/js/f9ffd00864034f20bda5f31ebe091f48.js'></script>
<script type='text/javascript' src='http://91.kaweiso.com/file/js/2a7db476c23e48e0b82f242d02e98c10.js'></script>
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
 
<script src="<?php echo $OSS_URL;?>js/Index.js" type="text/javascript"></script> 
<script src="<?php echo $OSS_URL;?>js/jquery.flexslider-min.js" type="text/javascript"></script>
<div id="slide">
  <div class="flexslider">
    <ul class="slides">
      <?php if(is_array($banner)){foreach($banner as $key=>$vo){?>
        <li onClick="window.location.href='<?php echo $vo['banner_url'];?>'" style="cursor:pointer;background:url(<?php echo $OSS_URL;?><?php echo $vo['banner_spic'];?>) 50% 0 no-repeat"></li>
      <?php } } ?>
    </ul>
  </div>
</div>
<section id="business" class="title_pb">
  <hgroup class="wow fadeIn">
    <h1>BUSINESS</h1>
    <h2>服务只有起点 &nbsp;&nbsp;满意没有终点</h2>
    <p class="business_line"><i class="block"></i></p>
    <P>创驰云网络从业超过5年！我们了解大中小型企业的生意模式,需求,我们倡导让客户感知产品的应用体验价值，而不仅是产品的功能。</P>
  </hgroup>
  <section id="business_model">
    <div class="W_v2_slist">
      <ul>
        <li class="p_0 p"><a href="Web/Index" title="网站建设/PRODUCT"><span class="sd sd1"></span><span class="rad rad1"><i class="icon"></i></span>
          <p><strong>网站建设</strong>PRODUCT</p>
          </a></li>
        <li class="b p_1"><a href="Extension/Index" title="网络推广/BRAND"><span class="sd"></span><span class="rad"><i class="icon"></i></span>
          <p><strong>网络推广</strong>BRAND</p>
          </a></li>
        <li class="t p_2"><a href="Mobile/weixin" title="微信开发/TRADING"><span class="sd"></span><span class="rad"><i class="icon"></i></span>
          <p><strong>微信开发</strong>TRADING</p>
          </a></li>
        <li class="y p_3"><a href="Mobile/apps" title="APP应用/MARKETING"><span class="sd"></span><span class="rad"><i class="icon"></i></span>
          <p><strong>APP应用</strong>MARKETING</p>
          </a></li>
        <li class="m p_4"><a href="web/Index#online_store" title="电商平台/MOBILE"><span class="sd"></span><span class="rad"><i class="icon"></i></span>
          <p><strong>电商平台</strong>MOBILE</p>
          </a></li>
        <li class="e p_5"><a href="Product/systemExploit" title="系统定制/E-COMMERCE"><span class="sd"></span><span class="rad"><i class="icon"></i></span>
          <p><strong>系统定制</strong>E-COMMERCE</p>
          </a></li>
      </ul>
    </div>
    <p id="curve" class="curve"></p>
  </section>
</section>
<section id="case_model" class="title_pb">
  <hgroup class="wow fadeIn">
    <h1>CASE</h1>
    <h2>经典案例展示</h2>
    <p class="business_line"><i class="block"></i></p>
    <P>客户的成功，也是我们的成功！专业团队，为您提供针对性、个性化的互联网解决方案！</P>
  </hgroup>
  <div id="cases">
    <div class="warp">
      <div class="homecaseslist" id="caseslist">
        <div style="left:0" class="caseslist">
          <ul>
            <?php if(is_array($recommend_case_1)){foreach($recommend_case_1 as $key=>$vo){?>
              <li><a href="Case/detail/id/<?php echo $vo['case_id'];?>.html" target="_blank"><img src="<?php echo $vo['case_spic'][0];?>" alt="<?php echo $vo['case_name'];?>" title="<?php echo $vo['case_name'];?>"></a>
                <p><a href="Case/detail/id/<?php echo $vo['case_id'];?>.html" target="_blank"><?php echo $vo['case_name'];?></a></p>
              </li>
            <?php } } ?>
          </ul>
          <ul>
            <?php if(is_array($recommend_case_2)){foreach($recommend_case_2 as $key=>$vo){?>
              <li><a href="Case/detail/id/<?php echo $vo['case_id'];?>.html" target="_blank"><img src="<?php echo $vo['case_spic'][0];?>" alt="<?php echo $vo['case_name'];?>" title="<?php echo $vo['case_name'];?>"></a>
                <p><a href="Case/detail/id/<?php echo $vo['case_id'];?>.html" target="_blank"><?php echo $vo['case_name'];?></a></p>
              </li>
            <?php } } ?>
          </ul>
        </div>
      </div>
      <div id="jsgopage"><em class="cur"></em><em class=""></em></div>
    </div>
  </div>
</section>
<div class="team"><img id="team_bg" class="team_bg" src="<?php echo $OSS_URL;?>img/bg_box04.jpg">
  <div class="team_model">
    <div class="team_conference wow bounceInLeft animated"><img src="<?php echo $OSS_URL;?>img/team_item_1.png"></div>
    <div class="team_confer wow fadeInDown animated" data-wow-delay="1.8s"><img src="<?php echo $OSS_URL;?>img/team_item_2.png"></div>
    <div class="rhombus wow bounceInRight animated"></div>
    <h1 class="rhombus_h1 wow bounceInRight animated"><span></span>
      <p>只为超出客户预期!</p>
    </h1>
    <div class="team_meeting wow bounceInRight animated"><img src="<?php echo $OSS_URL;?>img/team_item_5.png"></div>
    <div class="team_title wow animated fadeIn" data-wow-delay="1.5s"><img src="<?php echo $OSS_URL;?>img/team.png"><span>我们的团队</span></div>
    <div class="team_ceo wow rollIn" data-wow-delay="0.7s"></div>
    <div class="team_text wow animated fadeIn" data-wow-delay="1s">深圳市创驰云网络创建于2010年7月从事设计5年，我们相信，只要够专业够细心，我们就能用我们的魅力去征服客户客户就会对创驰云更加信赖，为我们带来更多的忠实客户。 用心服务，超越您的期待,让我们一起携手未来！</div>
    <a class="team_button Design_a wow pulse animated" data-wow-delay="1s" href="About/team">更多介绍&nbsp;&nbsp;&gt;</a></div>
</div>
<div class="profit">
  <img src="<?php echo $OSS_URL;?>img/neiyl.png" alt="做好网站不等于网上盈利" title="做好网站不等于网上盈利"/>
</div>
<div class="system_max">
  <div class="system_con">
    <div class="system_train">
      <div class="system_yuan"><img src="<?php echo $OSS_URL;?>img/Train.jpg" /></div>
      <div class="system_yuan_con">
        推广培训<br />客服培训<br /><h3>培养你的团队</h3>
      </div>
    </div>
    <div class="system_train train_center">
      <div class="system_yuan"><img src="<?php echo $OSS_URL;?>img/Manage.jpg" /></div>
      <div class="system_yuan_con">
        输出流程<br />工作模版<br /><h3>帮你建立管理体系</h3>
      </div>
    </div>
    <div class="system_train train_right">
      <div class="system_yuan"><img src="<?php echo $OSS_URL;?>img/meeting.jpg" /></div>
      <div class="system_yuan_con">
        专家辅导<br />现场沙龙<br /><h3>更多干货与人脉资源</h3>
      </div>
    </div>
  </div>
  <div class="system_bottom">
    网络营销如何快速启动？快速见效？<a href="http://wpa.qq.com/msgrd?v=3&uin=317361652&site=qq&menu=yes" target="_blank"><img src="<?php echo $OSS_URL;?>img/advisory.png" /></a>
  </div>
</div>
<section id="customer_model" class="title_pb" style="clear:both">
  <hgroup class="wow fadeIn">
    <h1>CUSTOMER</h1>
    <h2>寒来暑往&nbsp;&nbsp;感谢同行</h2>
    <p class="business_line"><i class="block"></i></p>
    <P>感谢您的一路陪伴!让我们带着光辉与荣耀，在今后的岁月里，携手共赢、再创辉煌!</P>
  </hgroup>
  <ul class="wow animated fadeInUp animated">
    <?php if(is_array($customer)){foreach($customer as $key=>$t){?>
      <li><img alt="<?php echo $t['product_name'];?>" class="team_meeting" src="<?php echo $t['product_spic'];?>"></li>
    <?php } } ?>
  </ul>
</section>
<section id="news_model" class="title_pb">
  <hgroup class="wow fadeIn">
    <h1>NEWS</h1>
    <h2>发生在我们身边的事</h2>
    <p class="business_line"><i class="block"></i></p>
    <P>网络营销领域从业超过10年！我们了解大中小型企业的生意模式，需求,我们倡导让客户感知产品的应用体验价值，而不仅是产品的功能！</P>
  </hgroup>
  <div class="news_max">
    <div class="news_client">
      <div class="news_client_img"><img src="<?php echo $OSS_URL;?>img/news_hts.png" /></div>
      <div class="news_client_Assess">
        <ul>
          <li class="news_client_line">飞扬五金 胡总 说：</li>
          <li>这次选择与创驰云合作很愉快，网站设计很满意，感谢创驰云团队的辛勤付出。</li>
        </ul>
        <ul>
          <li class="news_client_line">维纳斯 徐总 说：</li>
          <li>网站做得很漂亮，对比原来的网站简直是天壤之别，真是一分钱一分货。</li>
        </ul>
      </div>
      <div class="news_client_new">
        <ul>
          <li class="news_client_li"><h3 class="news_span_left news_client_span">最新动态</h3><span class="news_span_right"><a href="<?php echo $APP_URL;?>News/Index"> 更多资讯>></a></span></li>
          <?php if(is_array($recommended_news)){foreach($recommended_news as $k=>$t){?>
            <li><span class="news_span_left"><a href="News/Detail/Id/<?php echo $t['news_id'];?>.html"><?php chinesesubstr_admin($t['news_title'],0,60); ?></a></span><span class="news_span_right"><?php echo $t['news_date'];?></span></li>
          <?php } } ?>
        </ul>
      </div>
    </div>
    <div class="news_issue">
      <div><span class="news_issue_span1"><img src="<?php echo $OSS_URL;?>img/news_issue.png" /></span><span class="news_issue_span2"><h3>常见问题</h3>Frequently Asked Questions</span></div>
      <div class="news_issue_max">
        <ul>
          <?php if(is_array($Assign_news)){foreach($Assign_news as $k=>$t){?>
            <li>
              <div class="news_number"><?php echo $k+1;?></div>
              <a href="News/Detail/Id/<?php echo $t['news_id'];?>.html">
              <div class="news_issue_tit"><?php chinesesubstr_admin($t['news_title'],0,60); ?></div>
              <div class="news_issue_con"><?php chinesesubstr_admin($t['news_content'],0,300); ?></div>
              </a>
            </li>
          <?php } } ?>
        </ul>
      </div>
    </div>
  </div>
  <p class="abo-gy-ti0"><a class="abott1" href="News/Index"><span class="abott1">查看更多&nbsp;&nbsp;&gt;</span> <span class="abott2">查看更多&nbsp;&nbsp;&gt;</span></a></p>
</section>
<div class="fws" ></div>

<div class="InternetM">
  <div class="InternetM_img"></div>
</div>
<section class="title_pb process" id="process">
  <hgroup class="wow fadeIn">
    <h1>COOPERATION PROCESS</h1>
    <h2>合作流程</h2>
    <p class="business_line"><i class="block"></i></p>
  </hgroup>
  <div class="fk">
    <ul class="fk_list">
      <li><span>1</span>项目调研</li>
      <li><span>2</span>签订协议</li>
      <li><span>3</span>专家顾问</li>
      <li><span>4</span>营销型网站建设</li>
      <li><span>5</span>项目运营</li>
      <li><span>6</span>团队复制</li>
    </ul>
    <div class="fk_1">
      <div class="fk_b"></div>
      <div class="fk_text">项目经理实地考察项目，周详调研，填写项目需求表！</div>
    </div>
    <div class="fk_2">
      <div class="fk_t"></div>
      <div class="fk_tet">签订效果保证书，保证双方利益！</div>
    </div>
    <div class="fk_3">
      <div class="fk_b"></div>
      <div class="fk_text">全方位分析，精准定位，输出项目执行方案！</div>
    </div>
    <div class="fk_4">
      <div class="fk_t"></div>
      <div class="fk_tet">完全按照项目策划方案制作专属你的营销型网站！（独一无二）</div>
    </div>
    <div class="fk_5">
      <div class="fk_b"></div>
      <div class="fk_text">贴近目标消费市场，实现精准营销推广工作；（保证效果）</div>
    </div>
    <div class="fk_6">
      <div class="fk_t"></div>
      <div class="fk_tet">帮助客户打造高效率的网络营销运营团队！</div>
    </div>
  </div>
  
  
</section>






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

 
<script type="text/javascript">current="<?php echo $current;?>",$.nicenav(300,"<?php echo $current;?>");</script>
</body>
</html>
