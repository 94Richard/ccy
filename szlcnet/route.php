<?php
/**
 * ===========================
 * URL伪静态路由解析
 * Author: ly
 * Date: 2015-5-20
 * ===========================
 */

// 获取和方向标值
$route = $_REQUEST['route'];
$parts = explode('/', $route); // 将后面的目录按/分割为数组
$dir = (isMobile()) ? "M" : "Pc";
define('MODULE_DIR', './Application/' . $dir . '/action/'); // 类的路径

/**
 * +----------------------------------------------------------
 * 获取URL 重写真实的路径【 方向标函数生成系统模块关键值】
 * +----------------------------------------------------------
 */
// 这里需要对$SE_STRING进行过滤处理。
$ary_url = array(
    'controller' => 'Index',
    'method' => 'index',
    'pramers' => array()
);
$ary_se = explode('/', $route);
$se_count = count($ary_se);

// 路由控制
if ($se_count == 1 and $ary_se[0] != '') {
    $ary_url['controller'] = $ary_se[0];
} else
    if ($se_count > 1) { // 计算后面的参数，key-value
        $ary_url['controller'] = $ary_se[0];
        $ary_url['method'] = $ary_se[1];
        if ($se_count > 2 and $se_count % 2 != 0) { // 没有形成key-value形式
            die('paremer error');
        } else {
            for ($i = 2; $i < $se_count; $i = $i + 2) {
                $ary_kv_hash = array(
                    strtolower($ary_se[$i]) => $ary_se[$i + 1]
                );
                $ary_url['pramers'] = array_merge($ary_url['pramers'], $ary_kv_hash);
            }
        }
    }
$module_name = ucwords($ary_url['controller']);
$module_file = MODULE_DIR . $module_name . '/' . $module_name . 'Action.class.php';
$method_name = $ary_url['method']; // 方法名称

if (file_exists($module_file)) { // 如果该类存在,则加载入口类
    require_once './index.php';
} else {
    die('class file not find!');
}

//检验访问方式
function isMobile()
{
    $useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $useragent_commentsblock = preg_match('|\(.*?\)|', $useragent, $matches) > 0 ? $matches[0] : '';
    function CheckSubstrs($substrs, $text)
    {
        foreach ($substrs as $substr)
            if (false !== strpos($text, $substr)) {
                return true;
            }
        return false;
    }

    $mobile_os_list = array('Google Wireless Transcoder', 'Windows CE', 'WindowsCE', 'Symbian', 'Android', 'armv6l', 'armv5', 'Mobile', 'CentOS', 'mowser', 'AvantGo', 'Opera Mobi', 'J2ME/MIDP', 'Smartphone', 'Go.Web', 'Palm', 'iPAQ');
    $mobile_token_list = array('Profile/MIDP', 'Configuration/CLDC-', '160×160', '176×220', '240×240', '240×320', '320×240', 'UP.Browser', 'UP.Link', 'SymbianOS', 'PalmOS', 'PocketPC', 'SonyEricsson', 'Nokia', 'BlackBerry', 'Vodafone', 'BenQ', 'Novarra-Vision', 'Iris', 'NetFront', 'HTC_', 'Xda_', 'SAMSUNG-SGH', 'Wapaka', 'DoCoMo', 'iPhone', 'iPod');

    $found_mobile = CheckSubstrs($mobile_os_list, $useragent_commentsblock) ||
        CheckSubstrs($mobile_token_list, $useragent);

    if ($found_mobile) {
        return true;
    } else {
        return false;
    }
}


?>