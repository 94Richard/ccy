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


 
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Move.css"/>

</head>
<body>

<include file="http://www.baidu.com"/>

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

<div class="move_banner">
  <div class="move_center">
    <div class="move_img wow bounceInLeft animated"><img src="<?php echo $OSS_URL;?>img/move_phone.png"></div>
    <div class="move_text  wow fadeIn animated" data-wow-delay="0.5s">
      <h3>4亿人已经用手机上网</h3>
      <h4>您的网站准备好了吗</h4>
      <ul>
        <li>跨平台，节省开发成本</li>
        <li>无需下载，即刻浏览</li>
        <li>有效利用搜索引擎推广</li>
        <li>便于网络营销推广</li>
        <li>易于维护</li>
        <li>域名自动跳转，节省宣传成本</li>
      </ul>
    </div>
  </div>
</div>
<div class="miss">
  <div class="miss_left">
    <h3>再不行动你将错过商机</h3>
    <h4>中国手机网民已经突破<span>4.13</span>亿</h4>
    <div class="miss_left_text"> 据有关机构统计，中国5.38亿网民中，78%在使用手机
      上网。而传统网站在手机上打开太大，速度慢，导航复杂
      等糟糕的手机浏览体验会导致79%的用户流失。 </div>
  </div>
  <div class="miss_right"><img src="<?php echo $OSS_URL;?>img/move_1.jpg"></div>
</div>
<div class="why">
  <div class="why_left"><img src="<?php echo $OSS_URL;?>img/why_img.png"></div>
  <div class="why_right">
    <h3>企业为什么需要手机网站</h3>
    <h4>已经有了一个PC网站，为什么还需要一个手机网站</h4>
    <ul>
      <li>搜索引擎在手机上会优先把手机版网站排在前面，原来PC版网站在手机上处于不利的位置。</li>
      <li>PC版网页在手机上缩放后，字体很小，看不清楚。</li>
      <li>PC版图片尺寸很大，页面很大，占据很大的流量，网页加载很慢，而且浪费钱。</li>
    </ul>
  </div>
</div>
<div class="interaction">
  <div class="interaction_center">
    <div class="interaction_text">
      <h3>更便捷的移动交互</h3>
      <ul>
        <li>
          <div class="interaction_title">一键呼叫</div>
          <div class="interaction_txt">用户可直接外呼指定电话，缩短用户间距离，简化交易流程，瞬间促成交易</div>
        </li>
        <li>
          <div class="interaction_title">一键地图</div>
          <div class="interaction_txt">可定位用户当前地理位置给予地图导航引导用户对深层需求的挖掘</div>
        </li>
        <li>
          <div class="interaction_title">一键留言</div>
          <div class="interaction_txt">当您的访客看到喜欢的内容时，只需一键便可将内容分享到各大社交媒体或通过微信/短信分享给朋友</div>
        </li>
        <li>
          <div class="interaction_title">一键切换</div>
          <div class="interaction_txt">首页多张精美图片展示，支持手指触控，让您的客户摸得到您的产品，体验更流畅</div>
        </li>
      </ul>
    </div>
    <div class="interaction_img"><img style="width:474px;" src="<?php echo $OSS_URL;?>img/interaction_img.png"></div>
  </div>
</div>
<div class="function">
  <div class="function_img"><img src="<?php echo $OSS_URL;?>img/function.jpg"></div>
  <div class="function_text">
    <h3>更精确的网站功能优化</h3>
    <ul>
      <li>
        <div class="function_title">超强兼容</div>
        <div class="function_txt"> 平台：适配全部主流智能手机（包括苹果、安卓、黑莓、WindowsPhone、塞班、山寨等）机型：适配各种不同屏幕的机型（屏幕大小从3寸至6寸，分辨率从320P至1080P） </div>
      </li>
      <li>
        <div class="function_title">自动跳转</div>
        <div class="function_txt">无需新网址，您的客户在手机上使用原网址打开您的网站便可自动跳转至手机版，创驰云手机网站会根据访客使用的机型选择最合适的手机网站版本。</div>
      </li>
      <li>
        <div class="function_title">深度云同步</div>
        <div class="function_txt">传统PC网站只要一更新内容，创驰云手机网站云同步会自动实时同步多平台内容，您无需手动输入更新内容，减少维护成本</div>
      </li>
      <li>
        <div class="function_title">独立优化</div>
        <div class="function_txt">创驰云手机网站，可以从后台独立设置关键词，从而起到和PC网站独立优化的作用。</div>
      </li>
    </ul>
  </div>
</div>
<div class="spread">
  <div class="spread_center">
    <div class="spread_text">
      <h3>更实用的移动营销传播</h3>
      <ul>
        <li>
          <div class="spread_title">二维码传播</div>
          <div class="spread_txt">深度手机网站后台可以自动生成二维码供下载，你可以将二维码印上名片、
            样本、报纸等一切你可以印的东西上。扫描二维码即可自动登陆网站，方便
            快捷时髦。 </div>
        </li>
        <li>
          <div class="spread_title">短信群发传播</div>
          <div class="spread_txt">在短信中插入网址，突破短信数字限制将丰富的内容完全呈现在客户眼前。</div>
        </li>
        <li>
          <div class="spread_title">微博、微信传播</div>
          <div class="spread_txt">巧妙运用微博微信进行移动营销，抢占用户的手机终端。</div>
        </li>
        <li>
          <div class="spread_title">一键分享传播</div>
          <div class="spread_txt">当您的访客看到喜欢的内容时，只需一键便可将内容分享到各大社交媒体或
            通过微信/短信分享给朋友。 </div>
        </li>
      </ul>
    </div>
    <div class="spread_img"><img src="<?php echo $OSS_URL;?>img/spread_img.png"></div>
  </div>
</div>
<div class="advantage">
  <h3>手机网站六大优势，APP应用无法取代</h3>
  <ul>
    <li>
      <div class="advantage_title">兼容性强</div>
      <div class="advantage_text">跨平台适配，节省开发成本广。</div>
    </li>
    <li>
      <div class="advantage_title">访问便利</div>
      <div class="advantage_text">无需下载APP,即刻打开浏览。</div>
    </li>
    <li>
      <div class="advantage_title">维护方便</div>
      <div class="advantage_text">自动更新，易于维护，无需二次开发升级。</div>
    </li>
    <li>
      <div class="advantage_title">可收录</div>
      <div class="advantage_text">可被搜索引擎检索，助力搜索引擎排名。</div>
    </li>
    <li>
      <div class="advantage_title">优化方便</div>
      <div class="advantage_text">微博，微信，邮件，论坛等多种渠道方便线上推广。</div>
    </li>
    <li>
      <div class="advantage_title">排名高</div>
      <div class="advantage_text">能做PC和移动端的百度排名适配，能在百度移动搜索占据排名。</div>
    </li>
  </ul>
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
