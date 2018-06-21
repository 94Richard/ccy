/**
 * Created by liangyong on 2016/5/3.
 */
require.config({
    baseUrl: './template/Default/js/',
    paths: {
        "config": "./lib/config/config",
        "jquery": "./lib/jquery-1.8.2.min",
        "submitforAjax": "./public/submitforAjax",
        "function": "./public/function",
        "layer": "./lib/layer-v2.2/layer",
        "bootstrap": "./lib/bootstrap-3.3.5/js/bootstrap",
        "bootstrap-min": "./lib/bootstrap-3.3.5/js/bootstrap.min",
        "message": "./lib/ui/sco.message",
        "publicUtil": './lib/utils/publicUtil',
        "list": "./public/list",
        "product": "./public/product",
        "jquery-form": "./lib/jquery.form",
        "ajax_upload": './public/ajax_upload',
        "leftMenu": "./public/leftMenu",
        "pinyin": "./lib/jQuery.Hz2Py-min",


    }, shim: {
        "submitforAjax": {
            exports: "$",
            deps: ['jquery']
        },
        "function": {
            exports: "$",
            deps: ['jquery']
        },
        "layer": {
            exports: "$",
            deps: ['jquery']
        },
        "bootstrap": {
            exports: "$",
            deps: ['jquery']
        },
        "bootstrap-min": {
            exports: "$",
            deps: ['jquery']
        },
        "message": {
            exports: "$",
            deps: ['jquery']
        },
        "publicUtil": {
            exports: "$",
            deps: ['jquery']
        },
        "jquery-form": {
            exports: "$",
            deps: ['jquery']
        },
        "ajax_upload": {
            exports: "$",
            deps: ['jquery']
        },
        "pinyin": {
            exports: "$",
            deps: ['jquery']
        }
    }, waitSeconds: 0
});



