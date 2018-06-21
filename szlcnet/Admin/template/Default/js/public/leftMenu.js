/**
 * Created by Liangyong on 2016/5/6.
 */
define(function (require) {
    var $ = require('jquery');
    //导航切换
    $(".menuson li").click(function () {
        $(".menuson li.active").removeClass("active")
        $(this).addClass("active");
    });

    $('.title').click(function () {
        var $ul = $(this).next('ul');
        $('dd').find('ul').slideUp(300);
        if ($ul.is(':visible')) {
            $(this).next('ul').slideUp(300);
        } else {
            $(this).next('ul').slideDown(300);
        }
    });

});
