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


 
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Marketing.css"/>

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

<div class="marketIng_top"></div>
<div class="market_what">
  <div class="what_txt_1">特指：整个从策划、设计、功能开发、内容编写都得以企业现有成熟盈利模式以及核心产品在传统中的销售渠道，设定网络目标客户群体，针对网络潜在目标客户群体的习惯以及需求思维，站在潜在客户的角度在网站首页排布潜在客户感兴趣的内容。进而塑造企业公信力、核心产品展示、客户见证，为潜在目标客户答疑等，通过网站营销贯彻，获得销售线索，最终达成交易。</div>
  <div class="what_txt_2"> 营销型网站前端页面是给目标消费者看的，但是后台确是给搜索引擎看的，所以，营销型网站的后台系统必须具备独立的产品SEO系统、文章SEO系统、图片SEO优化系统、站内互链、流量统计分析软件等功能，方便以日后的营销推广，所以深度网将营销推广工作贯彻到网站制作的全过程，务使每一个环节，每一步骤都考虑到营销功能的需求，使网站一上线即具备强大的营销功能和有利于优化推广的特征。</div>
  <p class="yx_1"></p>
  <p class="yx_2"></p>
</div>
<!--6大特点-->
<div class="yx_six">
  <div class="six_model">
    <ul>
      <li>
        <h3 style="background:#64A22E;">实力要强</h3>
      </li>
      <li>一个好的网站，不能只是一张名片，茫茫网海，想要快速吸引到您客户的眼球，必须全方位的展现出企业最强最突出的优势，以求达到主动营销的效果，最终促成成交！</li>
    </ul>
    <ul>
      <li>
        <h3>定位要准</h3>
      </li>
      <li>完美的策划方案能够让您的网站在同行间异军突起，让你的产品更快速、最大价值化的销售出去，更让你的目标客户第一眼就爱上你！</li>
    </ul>
    <ul>
      <li>
        <h3 style="background:#681786;">成本要低</h3>
      </li>
      <li>都知道，媒体广告费用很高，广告投放也是一门学问，很多企业在选择广告投放时不考虑营销效果，而是减少开支；其实，静下心来，找一家专业的营销型建站公司即可让网络营销事半功倍！</li>
    </ul>
    <ul>
      <li>
        <h3 style="background:#C60C22;">形象要靓</h3>
      </li>
      <li>标榜企业或产品的形象是营销型网站的基本要求，一个好网站需要具备超强的视觉营销效果，以求令目标客户记住，从此奠定您的行业地位！</li>
    </ul>
    <ul>
      <li>
        <h3 style="background:#EA5B02;">体验要好</h3>
      </li>
      <li>我们可通过完美的站内交互体验，将客户牢牢的留在站内，通过在线聊天工具等多种形式与客户主动沟通交流；</li>
    </ul>
    <ul>
      <li>
        <h3 style="background:#F6AA00;">营销要广</h3>
      </li>
      <li>好的营销型网站就能做到随时随地对您的产品进行24小时不间断营销推广，您的客户可以在任何地方任何时间通过搜索引擎找到您！这就是营销型网站！</li>
    </ul>
  </div>
</div>

<!--营销型网站功能-->
<div class="yx_gn">
  <div class="ten_m">
    <h3>网站的用户体验</h3>
    <ul>
      <li>01<i>/</i>访问速度(首页FLASH或大图片、国内多路由访问、服务器稳定性);</li>
      <li>02<i>/</i>网站结构(导航栏是否清晰，整体结构是否适合营销的需求);</li>
      <li>03<i>/</i>网站内容(是否突出公司优势、产品优势、服务优势);</li>
      <li>04<i>/</i>网站设计(色彩搭配协调、专业性强，细节处理比较好);</li>
      <li>05<i>/</i>网站诚信(也就是网站的公信力证明，有资质论证、荣誉证书、第三方论证书);</li>
      <li>06<i>/</i>联系方式(每个产品与服务页面都有直接的联系方式，方便客户第一时间找到你)。</li>
      <li>07<i>/</i>标题优化 (首页标题、产品页面、新闻页面是否进行针对性关键词优化);</li>
      <li>08<i>/</i>内容优化 (核心关键词内容重复频率、内容更新率、内容原创性);</li>
      <li>09<i>/</i>关键词优化 (企业SWOT分析、优势产品与服务、关键词列表);</li>
      <li>10<i>/</i>核心优势 (企业定位，核心产品与服务优势);</li>
    </ul>
  </div>
  
  <!--十大网站功能-->
  <div class="ten_m_2 ten_m">
    <div class="prive_ten">
      <h3>网站具备营销功能</h3>
      <ul>
        <li>01<i>/</i>在线客服系统(网站客服，在线把握销售机会，整合QQ、EC、商桥在线功能，400全国免费热线：专业大公司形象，注重品牌与服务，把握商机)让潜在客户想咨询的时候，用不着打电话或者发email、直接通过在线客服系统与企业的销售人员进行管理和沟通。</li>
        <li>02<i>/</i>潜在客户跟踪系统：在销售学中有这样一句话：80%的成交是在5次跟踪后实现的!所以，对潜在客户的跟踪是非常非常重要的事情，所以如果企业网站自带一个潜在客户跟踪系统的话，将会大大提高销售的转化率。</li>
        <li>03<i>/</i>网络营销分析系统。网络营销分析系统让企业对自己的营销状况一目了然，以帮助企业做出更好的营销决策。</li>
        <li>04<i>/</i>营销型网站还需具备一个方便易操作的后台管理系统，因为后台管理系统包括新闻发布系统、产品系统、在线留言系统、代码编写系统等，决定着网站内容更新的高效性、管理的便捷性，它体现了营销型网站是否易用。</li>
      </ul>
    </div>
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
</a>
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
