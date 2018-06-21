/**
 * 针对List 列表的操作
 * Created by Liangyong on 2016/5/5.
 */

define(function (require) {

    var sub_ajax = require('submitforAjax');
    var fun = require('function');


    $('.tablelist tbody tr:odd').addClass('odd');    //表格隔行变色

    //绑定就地编辑
    $("td.editTd").bind('click', function () {
        var a = $(this).attr("data").split(',');
        sub_ajax.editNow(a[0], a[1], a[2], $(this), a[4]);
    });

    //多选【等同于反选】
    $("#InverSelect").bind('click', function () {
        fun.InverSelect('id[]');
    });
    //全选
    $("#allSelect").bind('click', function () {
        fun.allSelect('id[]');
    });
    //反选
    $("#InverSelectBtn").bind('click', function () {
        fun.InverSelect('id[]');
    });
    //全不选
    $("#allUnSelect").bind('click', function () {
        fun.allUnSelect('id[]');
    });

    //下拉操作（删除/冻结等）
    $("#selectSubmit").change(function () {
        sub_ajax. selectSubmit(this, 'form_data_list', $(this).val());
    });

    //图片点击放大查看
    $("a.showImg").click(function () {
        url = $(this).attr("data-url");
        if (url == '')
            return;
        fun.ShowImg("<img src='" + url + "' />", $(this).attr("data-w"));
    })

});

