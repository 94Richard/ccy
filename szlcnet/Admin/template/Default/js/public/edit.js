/**
 * 针对编辑页的操作
 * Created by Liangyong on 2016/5/6.
 */
define(function (require) {
    require('submitforAjax');
    require('function');
    require('ajax_upload').upload_Init(); //异步上传
    require("pinyin");

    //别名输入-汉字转拼音
    $("input#input_alias").live("keyup keydown change blur", function () {
        var val = $(this).toPinyin().replace(/\s+/g, "");
        $("#alias").val(val);
    });
});

