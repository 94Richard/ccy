<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
<title>一键导航_创驰云网络科技</title>
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



<script type="text/javascript"
            src="http://api.map.baidu.com/api?v=2.0&ak=pgBGF6E898mGycKAwf6GU555uxtdahHt"></script>
<script type="text/javascript"
            src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css"/>

    

         <div class="contact_map" id="map" style=" width:100%;height:500px;"> </div>
               <script type="text/javascript">
    var markerArr = [{
        title: "珠江国际中心",
        point: "114.256735, 22.728934",
        address: "龙翔大道9009号珠江国际中心18楼B1",
        tel: "0755-33059400",
        "gongjiao": "珠江国际中心"
    }];
    function map_init() {
        var map = new BMap.Map("map"); // 创建Map实例
        var point = new BMap.Point(114.256735,22.728934); //地图中心点，广州市
        map.centerAndZoom(point, 13); // 初始化地图,设置中心点坐标和地图级别。
        map.enableScrollWheelZoom(true); //启用滚轮放大缩小
        //地图、卫星、混合模式切换
        map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP, BMAP_SATELLITE_MAP, BMAP_HYBRID_MAP]}));
        //向地图中添加缩放控件
        var ctrlNav = new window.BMap.NavigationControl({
            anchor: BMAP_ANCHOR_TOP_LEFT,
            type: BMAP_NAVIGATION_CONTROL_LARGE
        });
        map.addControl(ctrlNav);
        //向地图中添加缩略图控件
        var ctrlOve = new window.BMap.OverviewMapControl({
            anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
            isOpen: 1
        });
        map.addControl(ctrlOve);
        //向地图中添加比例尺控件
        var ctrlSca = new window.BMap.ScaleControl({
            anchor: BMAP_ANCHOR_BOTTOM_LEFT
        });
        map.addControl(ctrlSca);
        var point = new Array(); //存放标注点经纬信息的数组
        var marker = new Array(); //存放标注点对象的数组
        var info = new Array(); //存放提示信息窗口对象的数组
        var searchInfoWindow = new Array();//存放检索信息窗口对象的数组
        for (var i = 0; i < markerArr.length; i++) {
            var p0 = markerArr[i].point.split(",")[0]; //
            var p1 = markerArr[i].point.split(",")[1]; //按照原数组的point格式将地图点坐标的经纬度分别提出来
            point[i] = new window.BMap.Point(p0, p1); //循环生成新的地图点
            marker[i] = new window.BMap.Marker(point[i]); //按照地图点坐标生成标记
            map.addOverlay(marker[i]);
            marker[i].setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
            //显示marker的title，marker多的话可以注释掉
            var label = new window.BMap.Label(markerArr[i].title, {offset: new window.BMap.Size(20, -10)});
            marker[i].setLabel(label);
            // 创建信息窗口对象
            // info[i] = "<p style=’font-size:12px;lineheight:1.8em;’>" + "</br>地址：" + markerArr[i].address + "</br> 电话：" + markerArr[i].tel + "</br></p>";
            info[i] = '<div style="margin:0;line-height:24px;padding:2px;padding-bottom:30px;">' + '<img src="http://file.szlcnet.com/img/mappic.png" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' + markerArr[i].address + '<br/><strong>电话：' + markerArr[i].tel + '</strong><br/><strong>附近标志性建筑:</strong>珠江广场、正中时代大厦<br/>线路：' + markerArr[i].gongjiao + '</div>';
            //创建百度样式检索信息窗口对象
            searchInfoWindow[i] = new BMapLib.SearchInfoWindow(map, info[i], {
                title: markerArr[i].title,      //标题
                width: 295,             //宽度
                height: 105,              //高度
                panel: "panel",         //检索结果面板
                enableAutoPan: true,     //自动平移
                searchTypes: [
                    BMAPLIB_TAB_SEARCH,   //周边检索
                    BMAPLIB_TAB_TO_HERE,  //到这里去
                    BMAPLIB_TAB_FROM_HERE //从这里出发
                ]
            });
            //添加点击事件
            marker[i].addEventListener("click",
                    (function (k) {
                        // js 闭包
                        return function () {
                            //将被点击marker置为中心
                            //map.centerAndZoom(point[k], 18);
                            //在marker上打开检索信息窗口
                            searchInfoWindow[k].open(marker[k]);
                        }
                    })(i)
            );
        }
        searchInfoWindow[0].open(marker[0]);    //默认打开
    }
    //异步调用百度js
    function map_load() {
        var load = document.createElement("script");
        load.src = "http://api.map.baidu.com/api?v=2.0&ak=IDvNBsejl9oqMbPF316iKsXR&callback=map_init";
        document.body.appendChild(load);
    }
    window.onload = map_load;
</script>  
           

    
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