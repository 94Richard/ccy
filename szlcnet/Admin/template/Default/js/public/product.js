/**
 * Created by Liangyong on 2016/5/11.
 */

define(function (require) {

    (function ($) {
        $.fn.autoTextarea = function (options) {
            var defaults = {
                maxHeight: null,//文本框是否自动撑高，默认：null，不自动撑高；如果自动撑高必须输入数值，该值作为文本框自动撑高的最大高度
                minHeight: $(this).height() //默认最小高度，也就是文本框最初的高度，当内容高度小于这个高度的时候，文本以这个高度显示
            };
            var opts = $.extend({}, defaults, options);
            return $(this).each(function () {
                $(this).bind("paste cut keydown keyup focus blur", function () {
                    var height, style = this.style;
                    this.style.height = opts.minHeight + 'px';
                    if (this.scrollHeight > opts.minHeight) {
                        if (opts.maxHeight && this.scrollHeight > opts.maxHeight) {
                            height = opts.maxHeight;
                            style.overflowY = 'scroll';
                        } else {
                            height = this.scrollHeight;
                            style.overflowY = 'hidden';
                        }
                        style.height = height + 'px';
                    }
                });
            });
        };
    })(jQuery);

    //自适应高度的textarea
    $("#defined").autoTextarea({maxHeight: 300});

    //如果为缩略图调用
    if (typeof (product_thumb) != 'undefined') {
        var layer = require('layer');
        var obj = $("#thumb_list img");
        var load = $("#thumb_list i");
        var thumb = {
            domAction: function (data) {
                obj.each(function (index, element) {
                    setTimeout(function () {
                        $(element).attr("src", basicUlr + data[index]);
                        $(element).parent('a').attr("data-url", basicUlr + data[index]);
                        $(element).show();
                        $(element).siblings("i").css("display", "none");
                    }, 1000);
                });
            }
        };
        var submitforAjax = require('submitforAjax');
        var arr = new Array();
        $("#test1").click(function () {
            obj.each(function (index, element) {
                arr[index] = $(element).attr("data-url");  //原始图路径
            });
            $.ajax({
                url: url,
                type: 'post',
                data: 'data=' + arr.join(","),
                dataType: 'json',
                error: function (a, b, c) { // 出错
                    obj.show();
                    load.css("display", "none");
                    layer.msg('生成失败!', {icon: 5, time: 1000});
                },
                beforeSend: function () { // 提交之前
                    obj.hide();
                    load.css("display", "block");
                },
                success: function (res) { // 成功
                    thumb.domAction(res);


                }
            });
        })

        //DOM处理图片


    }


});


