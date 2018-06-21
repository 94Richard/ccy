/**
 * Created by Liangyong on 2016/5/26.
 */
define(function (require) {
    require('submitforAjax');
    $("#case_btn").click(function () {
        var case_spic = $("#case_spic_file").val();
        if (case_spic == '' || case_spic.length == 0) {
            layer.alert('请选择要上传的文件!');
            return false;
        }
        var data = new FormData($('#caseFrom')[0]);
        $.ajax({
            url: caseAjax_url,
            type: 'POST',
            data: data,
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false
        }).done(function (data) {
            if (typeof (data.pic) != 'undefined') {
                var img = data.pic;
                var t = ($("#case_hidden").val() != '') ? "|" : "";
                $("#case_hidden").val($("#case_hidden").val() + t + img);
                $("#imglist").append('<ul><img path="' + img + '"  src="../' + img + '" border="0" width="100" height="100"><span onclick="delimg(this)" style="cursor:pointer">删除图片</span><span  class="casefm">设为封面</span></ul>')
            } else {
                layer.alert('文件上传失败!');
            }
        });
        return false;
    });


    //设为封面
    $(document).on("click", ".casefm", function () {
        var obj = $(this).parent();
        var input = $("#case_hidden");
        if (obj.has("i").length > 0) {
            obj.find("i").remove(); //数据移动
        } else {
            var element = $('<i class="fa fa-check-square fa-3x fmi"></i>');
            $(this).append(element);
            obj.siblings("ul").find("i").remove();
            if (input.val().indexOf("|")) {
                var arr = input.val().split("|"); //转数组,当前选择的数据挪到第一位
                var src = $(this).siblings("img").attr("path");
                for (var key in arr) {
                    if (src == arr[key]) {
                        arr.splice(key, 1); //移除
                        break;
                    }
                }
                var value = src + "|" + arr.join("|");
                input.val(value);
            }
        }
    });
});

function delimg(t) {
    var obj = $("#case_hidden");
    layer.confirm('图片删除后不可恢复', {
        title: '温馨提示',
        shade: 0,
        btn: ['确认', '取消'], //按钮
    }, function (index) {

        $(t).parent().remove();
        var s = $(t).siblings('img').attr('path')
        $.ajax({
            url: caseAJax_delete_url,
            // 要提交到的地址
            type: "post",
            // 提交的方式，GET或POST
            data: {imagename: web_dir + s},
            // 提交的数据
            dataType: "text",
            // 这里是返回数据的方式，可以是xml，text,html格式
            timeout: 20000,
            // 超时时间
            beforeSend: function () { // 提交之前
                layer.msg('请求提交中...', {icon: 16, time: 1000});
            }, error: function () { // 出错
                layer.msg('请求失败!', {icon: 5});
            }, success: function (res) { // 成功
                layer.close(index);
                layer.msg(res, {icon: 1, time: 2000});

                if ($("#imglist ul").length > 0) {
                    var newpic = "";
                    for (var i = 0; i < $("#imglist ul").length; i++) {
                        newpic += "|" + $("#imglist ul").eq(i).find("img").attr("path");
                    }
                    newpic = newpic.replace('|', '');
                    obj.val(newpic);
                }
                else {
                    obj.val('')
                }
            }
        });


    }, function (index) {
        layer.close(index);
    });
}

