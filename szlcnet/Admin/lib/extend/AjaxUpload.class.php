<?php

/**
 * AJax文件上传类，只适应单文件上传
 * */
class AjaxUpload
{
    private $dir = array(); // 上传的文件目录.0为外层目录。1为子目录
    private $file; // 文件对象
    private $file_size = 10200040000000; // 默认文件最大为1M
    private $user_file_type = "image"; // 用户上传的文件类型
    private $save_file_name; // 要保存的文件名称
    private $file_suffix; // 上传的文件后缀名称
    // 允许上传的文件类型
    private $file_type = array(
        'image' => array(
            'gif',
            'jpg',
            'jpeg',
            'png',
            'bmp'
        ),
        'flash' => array(
            'swf',
            'flv'
        ),
        'media' => array(
            'swf',
            'flv',
            'mp3',
            'wav',
            'wma',
            'wmv',
            'mid',
            'avi',
            'mpg',
            'asf',
            'rm',
            'rmvb'
        ),
        'file' => array(
            'doc',
            'docx',
            'xls',
            'xlsx',
            'ppt',
            'htm',
            'html',
            'txt',
            'zip',
            'rar',
            'gz',
            'bz2'
        )
    );

    // 获取要保存的文件名
    public function get_save_file_name()
    {
        // 如果要保存的文件名称为空。那么规则则按照： 年月日+随机数
        if (!$this->save_file_name) {
            $rand = rand(100, 999);
            $pics = date("YmdHis") . $rand . '.' . $this->file_suffix;
            $this->save_file_name = $pics;
        }
        return $this->save_file_name;
    }

    // 构造方法
    public function __construct($file_type, $file, $dir, $save_file_name = '', $file_size = 10200040000000)
    {
        $this->user_file_type = strtolower($file_type);
        $this->file = $file; // 文件名称
        $this->dir = $dir;
        $this->file_size = $file_size;
        $this->save_file_name = $save_file_name;
    }

    // 开始上传文件
    public function start_upload()
    {
        $file_type_arr = array_keys($this->file_type);
        // 判断制定的文件类型是否存在
        $key = array_search($this->user_file_type, $file_type_arr);
        if (isset ($file_type_arr [$key]) && $file_type_arr [$key] == $this->user_file_type) {
            $file_type = $this->file_type [$this->user_file_type]; // 该类型文件的后缀名数组
            $type = strtolower(str_replace('.', '', strstr($this->file ['name'], '.'))); // 获取上传文件的类型

            $parent_dir = $this->dir ['parent_dir']; // 父目录
            $children_dir = $this->dir ['children_dir']; // 子目录

            // 如果找到符合要求的文件类型
            if (array_search($type, $file_type)) {
                $this->file_suffix = $type; // 将文件后缀名赋给私有属性
                if ($this->file ['size'] >= $this->file_size) {
                    exit ('上传文件大小必须控制在.' . $this->file_size . '以内');
                }
                // 文件目录组合成路径
                $save_dir = $parent_dir . $children_dir;

                // 上传路径判断.不存在文件夹则自动创建
                $arr = explode('/', BASE_DIR . $save_dir);
                $aimDir = '';
                //: /data/home/syu2299560001/:/usr/home/syu2299560001/:/data/home/tmp/:/usr/home/tmp/:/var/www/disablesite/:/tmp/

                //如果当前操作系统为Linux
                if (PHP_OS == 'Linux') {
                    $basedir = ini_get('open_basedir');  //获取php允许访问的文件目录权限
                    $arr = explode(":", $basedir);
                    foreach ($arr as $str) {
                        $aimDir .= $str . '/';
                        if (in_array($aimDir, $arr) && !file_exists($aimDir)) {
                            mkdir($aimDir);
                        }
                    }
                } else {
                    foreach ($arr as $str) {
                        $aimDir .= $str . '/';
                        if (!file_exists($aimDir)) {
                            mkdir($aimDir);
                        }
                    }
                }

                $save_dir_path = BASE_DIR . $save_dir . $this->get_save_file_name(); // + 文件名称。

                if (move_uploaded_file($this->file ['tmp_name'], $save_dir_path)) {
                    return array(
                        'name' => $this->file ['name'], // 上传的文件名称
                        'pic' => $save_dir . $this->get_save_file_name(), // 网页访问完整URL
                        'save_url' => $save_dir . $this->get_save_file_name(), // 保存到数据库的路径
                        'size' => $this->file ['size'], // 文件大小
                        "dir" => $save_dir_path  // 物理路径
                    );
                }
                return false;
            } else {
                exit ('系统不允许上传文件后缀为.' . $type . '的文件');
            }
        } else {
            exit ('系统不存在文件类型为' . $this->user_file_type);
        }
    }
}

?>