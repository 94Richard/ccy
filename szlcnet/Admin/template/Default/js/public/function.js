/**
 * 系统函数库
 * Created by Liangyong on 2016/5/5.
 */
define(function (require) {
    var $ = require('jquery');
    return {
        /**
         * 图片比例缩小效果
         * example: <img src="图片地址" onload="imgresize(this,200,150)" />
         */
        imgresize: function (ImgD, w, h) {
            var flag = false;
            var image = new Image();
            var iwidth = w; //定义允许图片宽度，当宽度大于这个值时等比例缩小
            var iheight = h; //定义允许图片高度，当宽度大于这个值时等比例缩小
            image.src = ImgD.src;
            if (image.width > 0 && image.height > 0) {
                flag = true;
                if (image.width / image.height >= iwidth / iheight) {
                    if (image.width > iwidth) {
                        ImgD.style.width = iwidth + 'px';
                        ImgD.style.height = parseInt((image.height * iwidth) / image.width) + 'px';
                    } else {
                        ImgD.style.width = image.width + 'px';
                        ImgD.style.height = image.height + 'px';
                    }

                } else {
                    if (image.height > iheight) {
                        ImgD.style.height = iheight + 'px';
                        ImgD.style.width = parseInt((image.width * iheight) / image.height) + 'px';
                    } else {
                        ImgD.style.width = image.width + 'px';
                        ImgD.style.height = image.height + 'px';
                    }
                }
            }
            ImgD.style.padding = (h - parseInt(ImgD.style.height)) / 2 + "px " + (w - parseInt(ImgD.style.width)) / 2 + "px";
        },
        allSelect: function (name) { //checkbox全选
            var checkboxs = document.getElementsByName(name);
            for (var i = 0; i < checkboxs.length; i++) {
                checkboxs[i].checked = true;
            }
        },
        allUnSelect: function (name) { //checkbox全不选
            var checkboxs = document.getElementsByName(name);
            for (var i = 0; i < checkboxs.length; i++) {
                checkboxs[i].checked = false;
            }
            ;
        },
        InverSelect: function (name) { //checkbox返选
            var checkboxs = document.getElementsByName(name);
            for (var i = 0; i < checkboxs.length; i++) {
                var e = checkboxs[i];
                e.checked = !e.checked;
            }
        }, ShowImg: function (obj, w) {
            layer.open({
                type: 1,
                title: false,
                closeBtn: 0,
                area: w+'px',
                skin: 'layui-layer-nobg', //没有背景色
                shadeClose: true,
                content: obj
            });
        }
    };
});