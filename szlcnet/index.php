<?php
$_beginTime = microtime(TRUE);
session_start();
date_default_timezone_set('UTC');
define('THEME', 'default');


define('APP_NAME', 'Application');

define('DEBUG_MODE', true); // 缓存目录
define('USE_DB', true); // 是否使用数据库


define("ROOT_URL", str_replace('config', '', dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']))); // URL 重写根目录
define('BASE_DIR', str_replace(THEME . '/', '', str_replace('\\', '/', realpath(dirname(__FILE__) . '/')) . "/"));
define('APP_ROOT', BASE_DIR . APP_NAME . '/');

// 检测是否为移动设备

define("APP", (isMobile2()) ? "M" : "Pc");
define('CACHE_PATH', APP_ROOT . APP . '_cache/');
$runtime_cache_file = CACHE_PATH . APP_NAME . '_runtime.php';

if (DEBUG_MODE || !is_file($runtime_cache_file)) { // 调试模式下不加载缓存文件
    require(APP_ROOT . 'include/runtime.php');
} else {
    require($runtime_cache_file);
}

define("TPL_PATH", APP_NAME . "/" . APP . "/Template/" . THEME . "/");

// 获取需要操作的Action名称
$act = !isset($method_name) || $method_name == null ? 'Index' : $module_name;

// 默认执行index方法
$fun = !isset($method_name) || $method_name == null ? 'index' : $method_name;

// 需要在实例化类之前定义这两常量，否则类的__construct方法中无法获取
define('ACTION_NAME', $act, $act);

// 定义Action名称

define('FUN_NAME',ucwords($fun) );

// 定义出错默认执行首页类
$action = A($act, 'Index', $act);

// 实例化Action。如果Action不存在则实例化的是Admin这个基础Action
if (!method_exists($action, $fun)) { // 方法不存在，则执行_empty方法
    $fun = '_empty';
}
// 执行需要操作的Action中的function
$action->$fun();
$_endTime = microtime(TRUE);

//检验访问方式
function isMobile2()
{
    $useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $useragent_commentsblock = preg_match('|\(.*?\)|', $useragent, $matches) > 0 ? $matches[0] : '';
    function CheckSubstrs2($substrs, $text)
    {
        foreach ($substrs as $substr)
            if (false !== strpos($text, $substr)) {
                return true;
            }
        return false;
    }

    $mobile_os_list = array('Google Wireless Transcoder', 'Windows CE', 'WindowsCE', 'Symbian', 'Android', 'armv6l', 'armv5', 'Mobile', 'CentOS', 'mowser', 'AvantGo', 'Opera Mobi', 'J2ME/MIDP', 'Smartphone', 'Go.Web', 'Palm', 'iPAQ');
    $mobile_token_list = array('Profile/MIDP', 'Configuration/CLDC-', '160×160', '176×220', '240×240', '240×320', '320×240', 'UP.Browser', 'UP.Link', 'SymbianOS', 'PalmOS', 'PocketPC', 'SonyEricsson', 'Nokia', 'BlackBerry', 'Vodafone', 'BenQ', 'Novarra-Vision', 'Iris', 'NetFront', 'HTC_', 'Xda_', 'SAMSUNG-SGH', 'Wapaka', 'DoCoMo', 'iPhone', 'iPod');

    $found_mobile = CheckSubstrs2($mobile_os_list, $useragent_commentsblock) ||
        CheckSubstrs2($mobile_token_list, $useragent);

    if ($found_mobile) {
        return true;
    } else {
        return false;
    }
}

?>