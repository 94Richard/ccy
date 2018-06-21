<?php
$_beginTime = microtime(TRUE);
session_start();

// 增加URL传参设置模板主题
if (isset($_GET['t'])) {
    if (in_array($_GET['t'], array(
        'hoho',
        'Default'
    ))) {
        $_SESSION['theme_name'] = $_GET['t'];
    }
}
if (isset($_SESSION['theme_name'])) {
    define('THEME', $_SESSION['theme_name']);
} else {
    define('THEME', 'Default');
}
define('APP_TITLE', 'Uadmin网站管理后台');
define('APP_NAME', 'admin'); // 项目名称
define('APP_ROOT', './'); // 项目路径
define('CACHE_PATH', APP_ROOT . 'cache/'); // 缓存目录
define('DEBUG_MODE', true); // 调试模式，生产环境一定要设为false
define('USE_DB', true); // 是否使用数据库

// 网站物理根目录
$dir = str_replace(THEME . '/', '', str_replace('\\', '/', realpath(dirname(__FILE__) . '/')) . "/");

$t = str_replace("admin/", "", $dir);

define('BASE_DIR', str_replace("Admin/", "", $dir));

$PHP_SELF = $_SERVER['PHP_SELF'];

define('TPL_PATH', APP_ROOT . 'template/' . THEME . '/'); // 模板目录
define('SESSION_NAME', 'admin'); // session名称

// 网站URL根目录
$base_url = str_replace("/admin/", '', 'http://' . $_SERVER['HTTP_HOST'] . substr($PHP_SELF, 0, strrpos($PHP_SELF, '/') + 1) . "/");
define("BASE_URL", $base_url);


// 包含运行时文件
$runtime_cache_file = CACHE_PATH . APP_NAME . '_runtime.php'; // 运行时缓存文件

if (DEBUG_MODE || !is_file($runtime_cache_file)) { // 调试模式下不加载缓存文件
    require(APP_ROOT . 'include/runtime.php');
} else {
    require($runtime_cache_file);
}



// 获取需要操作的Action名称
$act = empty($_GET['a']) ? 'Home' : $_GET['a'];

if ($act == 'explorer') {
    header('location:./explorer/index.php');
    exit();
}
// 获取需要操作的Action方法
$fun = empty($_GET['f']) ? 'index' : $_GET['f']; // 默认执行index方法

// 需要在实例化类之前定义这两常量，否则类的__construct方法中无法获取
define('ACTION_NAME', $act, $act); // 定义Action名称

define('FUN_NAME', $fun); // 定义方法名称



// 定义类所在的目录.如果不存在。默认访问 action->admin目录
$dir = (@$_GET['dir']) ? $_GET['a'] : "admin";

// 定义类所在的目录.如果不存在。默认访问 action->admin目录

// 系统模块。
$array = array(
    "AdminUser",
    "AdminAuth",
    "User",
    "Admin",
    "Home"
);
$dir = (!@$_GET['a'] || in_array($_GET['a'], $array)) ? 'Admin' : $_GET['a'];

$action = A($act, 'Admin', $dir); // 实例化Action。如果Action不存在则实例化的是Admin这个基础Action



if (!method_exists($action, $fun)) { // 方法不存在，则执行_empty方法
    $fun = '_empty';
}
// 执行需要操作的Action中的function
$action->$fun();

$_endTime = microtime(TRUE);

?>