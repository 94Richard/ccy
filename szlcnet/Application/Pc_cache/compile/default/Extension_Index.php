<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
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


 
<script src="<?php echo $APP_URL;?>Application/Pc/Template/default/js/Extension.js" type="text/javascript"></script>
</head>
<body>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Extension.css"/>
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

<div id="slide" class="extension_top"
     style="padding-top:230px; background:url(<?php echo $OSS_URL;?>img/banner3.jpg) center center no-repeat;">
  <div class="g3Mol"><b class="g3_1"> </b><b class="g3_2"> </b><a href="#guestBook"><b class="g3_btn"></b> </a></div>
</div>
<div class="worry">
  <h3>您<span>是否</span>还在为这些问题发愁？</h3>
  <ul>
    <li>
      <div class="worry_title">网络排名靠后</div>
      <div class="worry_text">搜索引擎排名靠后，且很不稳定，收录也不好？</div>
    </li>
    <li>
      <div class="worry_title">品牌推广不好</div>
      <div class="worry_text">公司知名度不高，受众范围小？急需快速、深入、大范围推广企业品牌？</div>
    </li>
    <li>
      <div class="worry_title">客户、订单少</div>
      <div class="worry_text">网站流量起起落落，基本靠促销，且无效低质咨询很多，无法掌控客户群体质量，订单太少？</div>
    </li>
    <li>
      <div class="worry_title">您就是想赶快赚钱</div>
      <div class="worry_text">广告投入大把钞票但回报“惊人”？</div>
      <div class="worry_text">百度竞价、谷歌关键词、搜狗情景广告......千头万绪你能去问元芳吗？</div>
    </li>
  </ul>
</div>
<div class="extension_top"></div>
<div class="function">
  <h3></h3>
  <ul>
    <li>
      <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function_1.png"></div>
      <div class="function_title">云网站</div>
      <div class="function_text">三屏合一101站让你的企业遍布网络<br/>
        100家权威门户网站提供独家资源，品牌优质形象唾手可得<br/>
        批量一次性建设100个营销型专题+企业营销型官网助企业腾飞 </div>
    </li>
    <li class="on">
      <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function_2.png"></div>
      <div class="function_title">云搜索</div>
      <div class="function_text">批量一次性建设100个营销型网站，12小时实现百度等搜索引擎排名,<br/>
        利用云搜索无限制设置关键词！ </div>
    </li>
    <li>
      <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function_3.png"></div>
      <div class="function_title">云新闻</div>
      <div class="function_text">批量一次性在新浪等500家新闻媒体上随机进行软文报道！<br/>
        提升企业的全网影响力，打造企业品牌！ </div>
    </li>
    <li class="on">
      <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function_4.png"></div>
      <div class="function_title">云广告</div>
      <div class="function_text">批量一次性在上百家分类信息网站与B2B商贸网站上进行信息发布！<br/>
        提升企业的信息曝光度！ </div>
    </li>
    <li>
      <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function_5.png"></div>
      <div class="function_title">云盟</div>
      <div class="function_text">一分钟在你竞争对手在网上发布的信息广告旁批量进行广告展示把广<br/>
        告打到你的竞争对手的广告上！ </div>
    </li>
    <li class="on">
      <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function_6.png"></div>
      <div class="function_title">G3微站</div>
      <div class="function_text">你不用再花钱做手机网站，不用再花钱做微商城，微官网，<br/>
        更不用花钱去搞在线客服系统，在这里全搞定！ </div>
    </li>
  </ul>
</div>
<script type="text/javascript">
    $(function () {
        //云朵
        $("#slide b.g3_1").animate({
            top: 191,
            left: 306
        }, 800);
    });

</script> 
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
