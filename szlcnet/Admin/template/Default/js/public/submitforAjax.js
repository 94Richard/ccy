/**
 * 基于Ajax的数据提交
 * Created by liangyong on 2016/5/3.
 */
define(function (require) {
    var msg = require('message');
    var pubUtil = require('publicUtil');
    var config = require('config');
    var layer = require('layer');
    var reg_rule = {
        'require': /.+/,
        'email': /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/,
        'url': /^http|https:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/,
        'currency': /^\d+(\.\d+)?$/,
        'number': /^\d+$/,
        'zip': /^\d{6}$/,
        'integer': /^[-\+]?\d+$/,
        'double': /^[-\+]?\d+(\.\d+)?$/,
        'english': /^[A-Za-z]+$/
    };
    var submitforAjax = {
        //基于ajax的封装
        myAjax: function (myurl, mytype, mydata) {
            $.ajax({
                url: myurl,
                // 要提交到的地址
                type: mytype,
                // 提交的方式，GET或POST
                data: mydata,
                // 提交的数据
                dataType: "json",
                // 这里是返回数据的方式，可以是xml，text,html格式
                timeout: 20000,
                // 超时时间
                beforeSend: function () { // 提交之前
                    layer.msg('请求提交中...', {icon: 16, time: 1000});
                }, error: function () { // 出错
                    layer.msg('请求失败!', {icon: 5});
                }, success: function (res) { // 成功
                    var times = 3000;
                    layer.msg(res.msg, {icon: res.type, time: times});
                    setTimeout(function () {
                        if (res.type == config.REFRESH) {
                            window.location.href = window.location.href;
                        } else if (res.type == 'load') { //重新加载
                            window.location.reload(true);
                        }
                    }, 800)

                }
            });
        },
        upload: function () {
            return;
            layer.open({
                type: 2,
                title: '<i class="glyphicon glyphicon-th-list"></i>&nbsp;<b>文件管理器</b>',
                shadeClose: true,
                shade: 0.8,
                area: ['80%', '90%'],
                content: 'index.php?a=explorer' //iframe的url
            });
        },
        //a链接以ajax方式提交
        linkAjax: function () {
            $('a[target="_ajax"]').bind('click',
                function () {
                    var url = $(this).attr('href');
                    var title = $(this).attr('confirm'); //有confirm属性，则弹出确认
                    if (title) {
                        layer.confirm(title, {
                            title: '温馨提示',
                            btn: ['确认', '取消'], //按钮
                            shade: 0
                        }, function () {
                            submitforAjax.myAjax(url, 'GET', null);
                        });
                    } else {
                        submitforAjax.myAjax(url, 'GET', null);
                    }
                    return false;
                });
        },
        //校验表单,只针对input
        checkForm: function (form) {
            if (form.hasClass('loading')) return false;
            var check = true;
            form.find('input').each(function () {
                var val = $.trim($(this).val());
                var type = $(this).attr('dataType');
                var title = $(this).attr('placeholder');
                if (typeof(type) != "undefined" && typeof(title) != "undefined" && !reg_rule[type].test(val)) {
                    msg.scojs_message(title, msg.scojs_message.TYPE_ERROR);
                    $(this).focus();
                    check = false;
                    return false;
                }
            });
            return check;
        },
        //select的onchange提交表单
        selectSubmit: function (obj, form, url) {
            var okFun = function () {
                document.getElementById(form).action = url ? url : obj.value;
                obj.options[0].selected = true; //重置select，为了能够获取此select的值，故把它放后面
                var checkedList = new Array();
                var checkboxs = document.getElementsByName('id[]');
                for (var i = 0; i < checkboxs.length; i++) {
                    if (checkboxs[i].checked) {
                        checkedList.push(checkboxs[i].value);
                    }
                }
                submitforAjax.myAjax(url, "POST", {id: checkedList});
            }
            var cancelFun = function () {
                obj.options[0].selected = true;
            }
            if (obj.options[obj.selectedIndex].title != '') { //如果某选项设置了title，那么弹出确认。
                layer.confirm(obj.options[obj.selectedIndex].title, {
                    title: '温馨提示',
                    btn: ['确认删除', '取消'], //按钮
                    shade: 0
                }, function () {
                    okFun();
                }, function () {
                    cancelFun();
                });
            }

        },
        //就地编辑
        editNow: function (id, field, myurl, obj, column, table) {
            var mythis = $(obj);
            if (mythis.hasClass('editing')) { //有"正在编辑"标识,返回
                return false;
            }
            var input = $("<input type='text' class='editnow' />"); //创建文本框
            //var oldText = mythis.html();//旧值
            var oldText = mythis.text().trim(); //上面那句会将&变成&amp;反正都不是编辑html的，就用这句吧。
            input.val(oldText); //设置文本框值
            inputWidth = mythis.width(); //文本框长度等于编辑对象长度
            input.width(inputWidth); //设置文本框长度
            mythis.html(''); //清空编辑对象
            input.appendTo(mythis).focus().select(); //将文本框加到编辑对象
            mythis.width(inputWidth); //追加文本框后，编辑对象如td的长度可能会变大，重新设置一下。
            //mythis.css("padding", "0");
            mythis.addClass('editing'); //将编辑对象标识为"正在编辑",这样再次点击时,如果有此标识,就直接返回
            input.keypress(function (e) { //避免有表单时回车提交表单。换成回车后提交本操作
                var key = window.event ? e.keyCode : e.which;
                if (key.toString() == "13") {
                    input.blur();
                    return false;
                }
            });
            input.blur(function (event) { //文本框失去焦点后提交更新
                var newText = input.val(); //得到新值
                mythis.html(newText); //将编辑对象设置为新值
                mythis.removeClass('editing'); //取消"正在编辑"标识

                if (oldText != newText) { //只有新值跟旧值不一样时才提交服务器更新
                    var dataType = mythis.attr('dataType');
                    if (dataType) { //编辑对象设置dataType属性，进行数据合法性检验
                        if (!reg_rule[dataType].test(newText)) {
                            layer.msg('所填写数据不符合要求', {
                                icon: 2
                            });
                            mythis.html(oldText);
                            return false;
                        }
                    }
                    $.ajax({
                        //column为数据库的表的要改的列子增长ID名称
                        url: myurl,
                        type: "POST",
                        data: 'id=' + id + '&' + 'column=' + column + '&' + 'tab=' + table + '&' + field + '=' + encodeURIComponent(newText),
                        //这里应该编码一下，否则如果有特殊字符如&会出现问题。注意不能用escape编码，否则中文会出问题。
                        dataType: "json",
                        timeout: 20000,
                        beforeSend: function () {
                            layer.msg('请求提交中...', {
                                icon: 16,
                                time: 1000
                            });
                        }, error: function (res) {
                            layer.msg('请求失败!', {
                                icon: 5
                            });
                            mythis.html(oldText); //如果没有更新成功，编辑对象还原为旧值
                        }, success: function (response) {
                            layer.msg(response.msg, {
                                icon: response.type,
                                time: 2000
                            });
                            if (response.type != '1') {
                                mythis.html(oldText); //如果没有更新成功，编辑对象还原为旧值
                            }
                        }
                    });
                }
            });
        },
        //ajax表单提交
        submitByAjax: function () {
            var btn = $('.ajax_btn');
            //绑定回车事件
            $(document).keydown(function (event) {
                if (event.keyCode == "13" && $(document.body).has(".ajax_form"))btn.trigger("click");
            });
            btn.click(function () {
                var form = $('.ajax_form');
                if (submitforAjax.checkForm(form) == false) return false;
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: form.attr("action"),
                    data: form.serialize(),
                    success: function (res) {
                        if (res.type == config.SUCCESS_CODE) {
                            msg.scojs_message(res.msg, msg.scojs_message.TYPE_OK);
                            if (typeof (btn.attr("data-url")) != 'undefined') {
                                pubUtil.goUrl(btn.attr("data-url"), 1);
                            } else {
                                pubUtil.goUrl(window.location.href, 1);
                            }
                        } else if (res.type == config.REFRESH) {  //刷新，则跳转服务器返回的URL地址
                            msg.scojs_message(res.msg.info, msg.scojs_message.TYPE_OK);
                            setTimeout(function () {
                                pubUtil.goUrl(res.msg.url, msg, 1);
                            }, 1000);
                        }
                        else {
                            msg.scojs_message(res.msg, msg.scojs_message.TYPE_ERROR);
                            $(this).removeAttr("disabled");
                        }
                    }, error: function (request, status, error) {
                        msg.scojs_message('网络请求失败!', msg.scojs_message.TYPE_ERROR);
                        $(this).removeAttr("disabled");
                    }
                });
            });
        }
    };
    //页面加载自动调用
    submitforAjax.submitByAjax();
    submitforAjax.linkAjax();
    return submitforAjax;
});

