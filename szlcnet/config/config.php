<?php
/** ===========================
 *  整站常量设置
 *  Author: Liangyong
 *  Date: 2014-11-1
 * ===========================
 */


// 数据库连接常量
define('DB_TYPE', 'mysql'); // 数据库类型
define('DB_HOST', 'localhost'); // 数据库主机
define('DB_USER', 'root'); // 数据库用户名
define('DB_PWD', 'root'); // 数据库密码
define('DB_PORT', 3306); // 数据库端口，mysql默认是3306
define('DB_NAME', 'guanwang'); // 数据库名
define('DB_CHARSET', 'utf8'); // 数据库编码
define('DB_PREFIX', 'lc_'); // 数据库前缀
define('DB_PCONNECT', "pconn"); // pconn表示使用永久连接，false表示不使用永久连接
define('SUCCESS_CODE', 1); //成功状态码
define('ERROR_CODE', 5);//失败状态码
define('REFRESH', 'refresh');//刷新
define("ADMIN_PAGE", 20); // 后台分页常量：
define("SUFFIX", '.html'); // 指定伪静态后缀

// 文件上传目录常量
define("IMG_WATERMARK", "watermark_spic"); //水印目录
define("WEB_LOGO_DIR", "web_logo_spic");
define("NOPIC_DIR", 'noPic_spic'); // 无图显示目录
define("BANNER_DIR", "banner_spic"); // 网站banner目录
define("PRODUCT_SORT_DIR", "product_sort_spic");
define("PRODUCT_DIR", "product_spic");
define("NEWS_DIR", "news_spic");
define("CASE_DIR", "case_spic");













