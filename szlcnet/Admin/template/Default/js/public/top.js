/**
 * Created by Liangyong on 2016/5/6.
 */
define(function (require) {
    var $ = require('jquery');
	$("#languageP").click(function(){
		$("#lM").toggle();
		 var sub_ajax = require('submitforAjax');
	});	
});
