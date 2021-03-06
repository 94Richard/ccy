<?php
/**
 * 系统函数
 */

/**
 * 模板调用-生成URL
 * @param $params
 * @param bool|false $redirect
 * @return array|string
 */
function U($params, $redirect = false)
{
    if (is_string($params)) {
        if (substr($params, 0, 4) == 'url:') {
            parse_str(substr($params, 4), $params);
        } else {
            return $params;
        }
    }
    $file = basename($_SERVER['SCRIPT_NAME']);
    if (!is_array($params))
        return $file;
    if (isset($params['app'])) {
        $file = $params['app'] . '.php';
        unset($params['app']);
    }
    if (!isset($params['a'])) {
        $params = array_merge(array(
            'a' => ACTION_NAME
        ), $params);
    }
    return $file . '?' . http_build_query($params);
}

// URL重定向
function redirect($url, $time = 0, $msg = '')
{
    // 多行URL地址支持
    $url = str_replace(array(
        "\n",
        "\r"
    ), '', $url);
    if (empty($msg))
        $msg = "系统将在{$time}秒之后自动跳转到{$url}！";
    if (!headers_sent()) {
        // redirect
        if (0 === $time) {
            header("Location: " . $url);
        } else {
            header("refresh:{$time};url={$url}");
            echo($msg);
        }
        exit();
    } else {
        $str = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
        if ($time != 0)
            $str .= $msg;
        exit($str);
    }
}

// 快速文件数据读取和保存 针对简单类型数据 字符串、数组
function F($name, $value = '', $path = CACHE_PATH)
{
    static $_cache = array();
    $filename = $path . $name . '.php';
    if ('' !== $value) {
        if (is_null($value)) {
            // 删除缓存
            return unlink($filename);
        } else {
            // 缓存数据
            $dir = dirname($filename);
            // 目录不存在则创建
            if (!is_dir($dir))
                mkdir($dir);
            return file_put_contents($filename, "<?php\nreturn " . var_export($value, true) . ";\n?>");
        }
    }
    if (isset($_cache[$name]))
        return $_cache[$name];
    // 获取缓存数据
    if (is_file($filename)) {
        $value = include $filename;
        $_cache[$name] = $value;
    } else {
        $value = false;
    }
    return $value;
}

// 设置缓存 针对简单类型数据 字符串、数组
function set_cache($name, $value, $path = '')
{
    if ($path == '')
        $path = CACHE_PATH . 'data/';
    $filename = $path . $name . '.php';
    if ('' !== $value) {
        if (is_null($value)) {
            // 删除缓存
            return unlink($filename);
        } else {
            // 缓存数据
            $dir = dirname($filename);
            // 目录不存在则创建
            if (!is_dir($dir))
                mkdir($dir);
            return file_put_contents($filename, "<?php\nreturn " . var_export($value, true) . ";\n?>");
        }
    }
}

// 获取缓存 针对简单类型数据 字符串、数组
function get_cache($name, $expire = 7200, $path = '')
{
    if ($path == '')
        $path = CACHE_PATH . 'data/';
    static $_cache = array();
    $filename = $path . $name . '.php';
    if (isset($_cache[$name]))
        return $_cache[$name];
    // 获取缓存数据
    if (is_file($filename)) {
        if (time() > filemtime($filename) + $expire) {
            $value = false;
        } else {
            $value = include $filename;
            $_cache[$name] = $value;
        }
    } else {
        $value = false;
    }
    return $value;
}

/**
 * +----------------------------------------------------------
 * 字符串命名风格转换
 * type
 * =0 将Java风格转换为C的风格
 * =1 将C风格转换为Java的风格
 * +----------------------------------------------------------
 */
function parse_name($name, $type = 0)
{
    if ($type) {
        return ucfirst(preg_replace("/_([a-zA-Z])/e", "strtoupper('\\1')", $name));
    } else {
        $name = preg_replace("/[A-Z]/", "_\\0", $name);
        return strtolower(trim($name, "_"));
    }
}

// * 把返回的数据集转换成Tree
function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0)
{
    // 创建Tree
    $tree = array();
    if (is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            // 引用。不同的名字访问同一个变量内容
            $refer[$data[$pk]] = &$list[$key];
        }

        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId = $data[$pid];
            if ($root == $parentId) {
                $tree[] = &$list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent = &$refer[$parentId];
                    $parent[$child][] = &$list[$key];
                }
            }
        }
    }
    return $tree;
}

// 将Tree转换成List，以便模板赋值输出
function tree_to_list($tree, $depth = 0, $left = 10)
{
    static $myarray = array();
    static $depth;
    foreach ($tree as $v) {
        $space = 'margin-left:' . $left * $depth . 'px'; // 下级缩进
        $depth % 2 == 0 ? $color = '' : $color = 'color:green'; // 下级和上级分开颜色
        $temp = $v;
        unset($temp['_child']);
        $temp['space'] = $space;
        $temp['color'] = $color;
        $myarray[] = $temp;
        empty($v['_child']) ? '' : tree_to_list($v['_child'], ++$depth);
    }
    $depth != 0 ? --$depth : '';
    return $myarray;
}

// 抛出错误
function throw_error($msg)
{
    echo $msg;
    exit();
}

// 优化的require_once
function require_cache($filename, $path = '')
{
    static $_importFiles = array();
    $filename = realpath($path . $filename);
    if (!isset($_importFiles[$filename])) {
        if (file_exists($filename)) {
            require $filename;
            $_importFiles[$filename] = true;
        } else {
            $_importFiles[$filename] = false;
        }
    }
    return $_importFiles[$filename];
}

// 加载类库
function import($class, $type = 'extend', $ext = '.class.php', $dir = "")
{
    if ($type == 'action' || $type == 'model') {
        $ext = $type == 'action' ? 'Action.class.php' : 'Model.class.php';
        $file = APP_ROOT . APP . '/' . $type . '/' . $dir . '/' . $class . $ext;

        if (!is_file($file)) {
            $file = APP_ROOT . $type . '/' . $class . $ext;
        }
    } elseif ($type == 'core' || $type == 'extend') {

        $file = APP_ROOT . 'lib/' . $type . '/' . $class . $ext;
    } else {
        return false;
    }
    // echo $file.'<br />';
    return require_cache($file);
}

// 实例化模型
function M($name = '', $base = '', $dir)
{
    static $_model = array();
    $key = $name == '' ? 'default' : $name;
    if (isset($_model[$key]))
        return $_model[$key];
    if (import($name, "model", '.class.php', $dir) == false) { // 无法加载指定Model则加载基础Model
        import($base, 'model');
        $Model = $base . 'Model';
    } else {
        $Model = $name . 'Model';
    }
    $_model[$key] = new $Model();
    return $_model[$key];
}

// 实例化Action
function A($name = '', $base = '', $dir)
{
    static $_action = array();
    $key = $name == '' ? 'default' : $name;
    if (isset($_action[$key]))
        return $_action[$key];
    if (import($name, "action", '.class.php', $dir) == false) { // 无法加载指定Action则加载基础Action
        import($base, 'action');
        $Action = $base . 'Action';
    } else {
        $Action = $name . 'Action';
    }
    $_action[$key] = new $Action();
    // 重置模板文件目录
    $_action[$key]->set_tpl_dir(TPL_PATH . $name . '/');
    return $_action[$key];
}

// 根据存入的数组参数，执行Model方法
function model($params = array())
{
    $name = isset($params['name']) ? $params['name'] : ''; // Model名称
    $fun = isset($params['fun']) ? $params['fun'] : 'get_list'; // Model方法
    if (isset($params['cache'])) { // 使用缓存
        $key = md5(serialize($params) . 'model');
        $result = get_cache($key, $params['cache']);
        if ($result === false) {
            $model = M($name);
            $result = $model->$fun($params);
            set_cache($key, $result);
        }
    } else {
        $model = M($name);
        $result = $model->$fun($params);
    }
    return $result;
}

/**
 * 格式化日期,主要用于模板输出
 * @param $val
 */
function dateFormat($val, $fomat = "Y-m-d")
{
    echo date($fomat, strtotime($val));
}

/**
 * 获取输入参数 支持过滤和默认值
 * 使用方法:
 * <code>
 * I('post.'); 获取$_GET
 * I('get.'); 获取$_GET
 * </code>
 * @param string $name 变量的名称 支持指定类型
 * @param mixed $default 不存在的时候默认值
 * @param mixed $filter 参数过滤方法
 * @param mixed $datas 要获取的额外数据源
 * @return mixed
 */
function I($name)
{
    $ary_url = array(
        'controller' => 'Index',
        'method' => 'index',
        'pramers' => array()
    );
    $ary_se = explode('/', $_REQUEST['route']);
    $se_count = count($ary_se);

// 路由控制
    if ($se_count == 1 and $ary_se[0] != '') {
        $ary_url['controller'] = $ary_se[0];
    } else
        if ($se_count > 1) { // 计算后面的参数，key-value
            $ary_url['controller'] = $ary_se[0];
            $ary_url['method'] = $ary_se[1];
            if ($se_count > 2 and $se_count % 2 != 0) { // 没有形成key-value形式
                return null;
            } else {
                for ($i = 2; $i < $se_count; $i = $i + 2) {
                    //如果是最后一次参数，剔除指定后缀名
                    if ($i + 2 == $se_count) {
                        $ary_se[$i + 1] = str_replace(SUFFIX, "", $ary_se[$i + 1]);
                    }
                    $ary_kv_hash = array(
                        strtolower($ary_se[$i]) => $ary_se[$i + 1]
                    );
                    $ary_url['pramers'] = array_merge($ary_url['pramers'], $ary_kv_hash);
                }
            }
        }

    //判断请求
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
    if ($REQUEST_METHOD == "POST") {
        unset($_POST['route']); //移除路由
        $_POST['controller'] = $ary_url['controller'];
        $_POST['method'] = $ary_url['method'];
        $_POST['pramers'] = $ary_url['pramers'];

    } else if ($REQUEST_METHOD == "GET") {
        unset($_GET['route']);
        $_GET['controller'] = $ary_url['controller'];
        $_GET['method'] = $ary_url['method'];
        $_GET['pramers'] = $ary_url['pramers'];
    }

    if (strpos($name, '.')) {  //指定资源来源
        list($method, $name) = explode('.', $name);
        if (strtolower($method) == 'post') {
            return isset($_POST['pramers'][$name]) ? $_POST['pramers'][$name] : null;
        } else if (strtolower($method) == 'get') {
            return isset($_GET['pramers'][$name]) ? $_GET['pramers'][$name] : null;
        }
    } else { //返回全部
        if (strtolower($name) == 'post') {
            return $_POST;
        } else if (strtolower($name) == 'get') {
            return $_GET;
        }
    }
    return null;
}

/**
 * xml 转json
 * @param $source
 * @return string
 */
function xml_to_json($source)
{
    if (is_file($source)) {             //传的是文件，还是xml的string的判断
        $xml_array = simplexml_load_file($source);
    } else {
        $xml_array = simplexml_load_string($source);
    }
    $json = json_encode($xml_array);  //php5，以及以上，如果是更早版本，請下載JSON.php
    return $json;
}

//对象转数组
function object_array($array)
{
    if (is_object($array)) {
        $array = (array)$array;
    }
    if (is_array($array)) {
        foreach ($array as $key => $value) {
            $array[$key] = object_array($value);
        }
    }
    return $array;
}

// 生成静态缓存图片
function getpic($pic, $width = 800, $height = 0, $cut = true, $water = false, $nopic = '')
{
    if (!file_exists($pic)) { // 缺省图像
        if ($nopic == '')
            return APP_ROOT . 'template/common/images/nopic.gif';
        return $nopic;
    }
    // 取得图片后缀
    $pathinfo = pathinfo($pic);
    $picext = $pathinfo['extension'];
    $picname = md5($pic);
    $picpath = substr($picname, 0, 1);
    $picpath = CACHE_PATH . 'images/' . $picpath;
    if (!is_dir($picpath)) {
        mkdir($picpath, 0777);
    }
    $newpic = $picpath . '/' . $picname . '.' . $width . 'x' . $height . '.' . $picext; // 新图名称
    if (file_exists($newpic)) {
        // 如果存在此图片，则返回它
        return $newpic;
    } else { // 否则生成新图片，并返回
        import('Image');
        $info = Image::thumb($pic, $newpic, $width, $height, $cut);
        if ($water)
            Image::water($newpic, '', APP_ROOT . 'template/common/images/water.png');
        return $newpic;
    }
}

/**
 *  UUID生成
 * @param      string  an optional prefix
 * @return     string  the formatted uuid
 */
function uuid($prefix = '')
{
    $chars = md5(uniqid(mt_rand(), true));
    $uuid = substr($chars, 0, 8) . '-';
    $uuid .= substr($chars, 8, 4) . '-';
    $uuid .= substr($chars, 12, 4) . '-';
    $uuid .= substr($chars, 16, 4) . '-';
    $uuid .= substr($chars, 20, 12);
    return $prefix . $uuid;
}

// discuz的加密解密函数
function _authcode($string, $operation = 'DECODE', $key = '', $expiry = 0)
{
    $ckey_length = 4;
    $key = md5($key ? $key : AUTH_KEY);
    $keya = md5(substr($key, 0, 16));
    $keyb = md5(substr($key, 16, 16));
    $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';

    $cryptkey = $keya . md5($keya . $keyc);
    $key_length = strlen($cryptkey);

    $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;
    $string_length = strlen($string);

    $result = '';
    $box = range(0, 255);

    $rndkey = array();
    for ($i = 0; $i <= 255; $i++) {
        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
    }

    for ($j = $i = 0; $i < 256; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }

    for ($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }

    if ($operation == 'DECODE') {
        if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {
            return substr($result, 26);
        } else {
            return '';
        }
    } else {
        return $keyc . str_replace('=', '', base64_encode($result));
    }
}

/**
 * ***********输出空格*********************
 */
// 用于select的下级缩进
function writespace($num)
{
    $content = '';
    for ($i = 0; $i < $num; $i++) {
        $content .= '&nbsp;';
    }
    return $content;
}

/**
 * *******字符串截取*************
 */
function chinesesubstr_admin($str, $start, $len)
{ // $str指字符串,$start指字符串的起始位置，$len指字符串长度
    $str = strip_tags($str);
    $tmpstr = "";
    $strlen = $start + $len; // 用$strlen存储字符串的总长度，即从字符串的起始位置到字符串的总长度
    for ($i = $start; $i < $strlen;) {
        if (ord(substr($str, $i, 1)) > 0xa0) { // 如果字符串中首个字节的ASCII序数值大于0xa0,则表示汉字
            $tmpstr .= substr($str, $i, 3); // 每次取出三位字符赋给变量$tmpstr，即等于一个汉字
            $i = $i + 3; // 变量自加3
        } else {
            $tmpstr .= substr($str, $i, 1); // 如果不是汉字，则每次取出一位字符赋给变量$tmpstr
            $i++;
        }
    }
    if (strlen($str) > $len) {
        $tmpstr .= "...";
    }
    echo $tmpstr; // 返回字符串
}


/**
 * ***********输出下拉列表选项**************
 */
// $arr可以是数组，树，或者以下格式
// 男:0,女:1
function myselect($arr, $default = false, $depth = 0, $left = 2)
{
    if (!$arr)
        return false;
    static $depth = 0; // 深度
    // 如果传入的数据是 0:男,1:女 这样的格式，先转换成数组
    if (!is_array($arr)) {
        $tmp = explode(',', $arr);
        foreach ($tmp as $v) {
            $tt = explode(':', $v);
            $a[] = array(
                'text' => $tt[0],
                'value' => $tt[1]
            );
        }
        myselect($a, $default);
    } else {
        foreach ($arr as $v) {
            (string)$v['value'] === (string)$default ? $selected = 'selected' : $selected = '';
            $space = writespace($left * $depth); // 下级缩进
            $depth % 2 == 0 ? $color = '' : $color = 'style="color:green"'; // 下级和上级分开颜色
            echo '<option value="' . $v['value'] . '" ' . $selected . ' ' . $color . '>' . $space . $v['text'] . '</option>';
            empty($v['_child']) ? '' : myselect($v['_child'], $default, $depth++);
        }
    }
    $depth != 0 ? --$depth : ''; // 退回上层，深度减1
}

/**
 * ***********输出多项或单项选择**************
 */
// $arr可以是数组，或者以下格式
// 男:0,女:1
function mycheckbox($name, $arr, $default = false, $parameters = '', $type = 'radio')
{
    if (!$arr)
        return false;
    // 如果传入的数据是 0:男,1:女 这样的格式，先转换成数组
    if (!is_array($arr)) {
        $tmp = explode(',', $arr);
        foreach ($tmp as $v) {
            $tt = explode(':', $v);
            $a[] = array(
                'text' => $tt[0],
                'value' => $tt[1]
            );
        }
        mycheckbox($name, $a, $default, $parameters, $type);
    } else {
        if (!is_array($default)) {
            $default = explode(',', $default);
        }
        foreach ($arr as $v) {
            in_array($v['value'], $default) ? $checked = 'checked' : $checked = '';
            echo '<input name="' . $name . '" type="' . $type . '" value="' . $v['value'] . '" ' . $checked . ' ' . $parameter . ' /> ' . $v['text'];
        }
    }
}

function out_select($name, $arr, $default = false, $parameters = '')
{
    echo '<select name="' . $name . '" ' . $parameters . ' >';
    myselect($arr, $default);
    echo '</select>';
}

function out_checkbox($name, $arr, $default = false, $parameters = '')
{
    mycheckbox($name, $arr, $default, $parameters, 'checkbox');
}

function out_radio($name, $arr, $default = '', $parameters = '')
{
    mycheckbox($name, $arr, $default, $parameters, 'radio');
}

function out_input($name, $value, $parameters = '')
{
    echo '<input type="text" name="' . $name . '" value="' . $value . '" ' . $parameters . ' />';
}

function out_text($name, $value, $parameters = '')
{
    echo '<textarea name="' . $name . '" ' . $parameters . ' >' . $value . '</textarea>';
}

/**
 * 截取utf-8字符串
 *
 * @since 2008.12.23
 * @param string $str
 *            被截取的字符串
 * @param integer $start
 *            起始位置
 * @param integer $length
 *            截取长度(每个汉字为3字节)
 */
function utf8_strcut($str, $start, $length = null)
{
    $str = strip_tags($str);
    preg_match_all('/./us', $str, $match);
    $chars = is_null($length) ? array_slice($match[0], $start) : array_slice($match[0], $start, $length);
    unset($str);
    echo implode('', $chars);
}

?>