//Ajax 上传图片

define(function (require) {
    require('jquery-form');
    var publicUtil = require('publicUtil');
    var upload = {
        ajax_upload: function () {
            var bar = $('.bar');
            var percent = $('.percent');
            var showimg = $('#showimg');
            var progress = $(".progress");
            var files = $(".files");
            var obj = $("#fileupload");
            var url = obj.attr("data-url");
            var dir = obj.attr("data-dir");
            var btn = $(".btn2 span");

            obj.wrap("<form id='myupload' action='" + url + "' method='post' enctype='multipart/form-data'></form>");
            $("#fileupload").change(function () {
                $("#myupload").ajaxSubmit({
                    dataType: 'json',
                    data: {dir: dir},
                    beforeSend: function () {
                        showimg.empty();
                        progress.show();
                        var percentVal = '0%';
                        bar.width(percentVal);
                        percent.html(percentVal);
                        btn.html("上传中...");
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal);
                        percent.html(percentVal);
                    },
                    success: function (data) {
                        $("div.is_upload").hide();
                        //将返回的路径赋给隐藏表单
                        save_url = data.save_url;
                        showimg.siblings("input:hidden").val(save_url);
                        files.html("<b>&nbsp;&nbsp;" + data.name + "(" + data.size + "k)</b><span class='sle_img show_upload_imgs'>预览</span><span class='sle_img delimg' rel='" + data.pic + "'>删除</span>");
                        var img = data.pic;
                        $("#hide_file").val(img);
                        var dir = data.dir;
                        obj.attr("data-img-url", dir);
                        $(".show_upload_imgs").append("<div class='hide_upload_img'><img   src='../" + img + "' /></div>")
                        btn.html("添加附件");
                        files.show().children("b").hide();
                    }, error: function (xhr, b, c) {
                        btn.html("上传失败");
                        bar.width('0')
                        files.html(xhr.responseText);
                    }
                });
            });
            //查看上传的图片
            $("span.show_upload_imgs").live('click', function () {
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 1,
                    shadeClose: true,
                    area: 'auto',
                    maxWidth:900,
                    content: $(".hide_upload_img").html()
                });
            })

            //删除图片
            $(".delimg").live('click', function () {
                var obj = $("#fileupload");
                var pic = $(this).attr("rel");
                var url = obj.attr("delte-url"); //要传递的ＵＲＬ地址
                var showimg = $('#showimg');
                var files = $(".files");
                $.post(url, {imagename: obj.attr("data-img-url")}, function (msg) {
                    //图片删除成功后。清空隐藏表单的val值
                    showimg.siblings("input:hidden").val('');
                    $("div.is_upload").hide();
                    files.html(msg);
                    window.setTimeout(function () {
                        files.hide();
                    }, 2000);
                    showimg.empty();
                    progress.hide();
                });
            });
        },
        upload_Init: function () {
            if (!$("#hide_file").val()) {
                $("div.is_upload").hide();
            }
            //AJax文件上传
            upload.ajax_upload();

        }
    };
    return upload;

});
