/**
 * 公共的工具类，需要jQuery支持
 * Created by Liangyong on 2016/5/5.
 */
define(function (require) {
    return {
        isNotEmpty: function (val) {
            return !this.isEmpty(val);
        },
        isEmpty: function (val) {
            if ((val == null || typeof(val) == "undefined") || (typeof(val) == "string" && val == "" && val != "undefined")) {
                return true;
            } else {
                return false;
            }
        },
        //去除元素内所有内容 strIds："#id1,#id2,#id3"
        emptyHtml: function (strIds) {
            try {
                var ids = strIds.trim(",").split(",");
                $(ids).each(function () {
                    var obj = $(this.toString());
                    if (obj.length > 0) {
                        $(obj).each(function () {
                            $(this).html("");
                        });
                    } else {
                        obj.html("");
                    }
                });
            } catch (ex) {
                if (PublicUtil.isDebug()) {
                    throw new Error("js方法：【PublicUtil.emptyHtml(strIds)】，error！");
                }
            }
        },
        //去除元素的值 strIds："#id1,#id2,#id3"
        emptyValue: function (strIds) {
            try {
                var ids = strIds.trim(",").split(",");
                $(ids).each(function () {
                    var obj = $(this.toString());
                    if (obj.length > 0) {
                        $(obj).each(function () {
                            $(this).val("");
                        });
                    } else {
                        obj.val("");
                    }
                });
            } catch (ex) {
                if (PublicUtil.isDebug()) {
                    throw new Error("js方法：【PublicUtil.emptyValue(strIds)】，error！");
                }
            }
        },
        //去除Textarea内所有内容 strIds："#id1,#id2,#id3"
        emptyTextarea: function (strIds) {
            try {
                var ids = strIds.trim(",").split(",");
                $(ids).each(function () {
                    var obj = $(this.toString());
                    if (obj.length > 0) {
                        $(obj).each(function () {
                            $(this).empty();
                            $(this).val("");
                        });
                    } else {
                        obj.empty();
                        obj.val("");
                    }
                });
            } catch (ex) {
                if (PublicUtil.isDebug()) {
                    throw new Error("js方法：【PublicUtil.emptyTextarea(strIds)】，error！");
                }
            }
        },
        loadCSS: function (path) {
            if (!path || path.length === 0) {
                throw new Error('argument "path" is required !');
            }
            var head = document.getElementsByTagName('head')[0];
            var link = document.createElement('link');
            link.href = path;
            link.rel = 'stylesheet';
            link.type = 'text/css';
            head.appendChild(link);
        },
        loadJs: function (path) {
            if (!path || path.length === 0) {
                throw new Error('argument "path" is required !');
            }
            var head = document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.src = path;
            script.type = 'text/javascript';
            head.appendChild(script);
        },

        //选项卡切换,
        tabs: function ($this) {
            $this.addClass('active').siblings().removeClass('active');
            $("#tab" + $this.index()).show().siblings().hide();
            $("#nav_tabs").show();
        },
        //延迟页面跳转
        goUrl: function (url, mins) {
            setTimeout(function () {
                window.location.href = url;
            }, mins * 1000);
        }
    }
});

