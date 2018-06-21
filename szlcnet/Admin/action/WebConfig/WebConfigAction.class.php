<?php
import('Admin', 'action');

class WebConfigAction extends AdminAction
{
    private $web_conf_arr = array();

    // 网站配置存储数据
    public function __construct()
    {
        parent::__construct();
        $this->assign("configTab", isset($this->in['tip']) ? $this->in['tip'] : 'basic');
    }

    public function index()
    {
        //有多少种语言，就生成多少配置表数据
        $web_config = $this->db->table("web_config");
        foreach ($this->languageList as $key => $val) {
            $res = $web_config->where("language=" . $val['id'])->find();
            if (!$res) {
                $this->db->query("insert into " . DB_PREFIX . "web_config (web_title,language) values('请输入" . $val['language'] . "站点标题'," . $val['id'] . ")");
            }
        }
        $this->web_conf_arr = $this->db->table('web_config')->where($this->lang)->find();
        $this->assign('web_conf_arr', $this->web_conf_arr);
        $this->assign("upload_dir", WEB_LOGO_DIR);
        $this->assign("file_name", "web_logo"); // 隐藏上传文本域的名称。用于上传
        $this->assign("img_url", $this->web_conf_arr['web_logo']); // 图片路径
        $this->assign("vo", $this->web_conf_arr);
        $this->display();
    }

    /**
     * 图片设置主页
     */
    public function imageSetting()
    {
        $this->_before_image();
        $this->assign("select_option", "edit");
        $info = $this->db->table("image_setting")->where($this->lang)->select();
        $this->assign("settingList", $info);
        $this->display("WebConfig_imageIndex");
    }

    // 更改 自定义属性
    public function update_defined()
    {
        $where = array(
            "name" => "product"
        );
        $db_data = array(
            "value" => $_POST['value']
        );
        $result = $this->db->table("extend")
            ->where($where)
            ->data($db_data)
            ->update(); // 进行更新
        if ($result > 0) {
            $this->success('更新成功！');
        } elseif ($result === 0) {
            $this->error('没有变化！');
        } else {
            $this->error('更新失败！');
        }
    }

    //删除前,对特殊的数据判断，不可删除
    protected function _before_delete($id)
    {
        $tab = $this->in['tab'];
        $id = $this->in['id'];
        if ('language' == $tab) {
            if ($id == 1)
                $this->error('中文为基本语言，不可删除!');
        } else if ('image_setting' == $tab) {
            if ($id == 13)
                $this->error('产品列表缩略图为基本图像设置，不可删除!');
        }
    }

    /**
     * 图像插入
     */
    public function insertImg()
    {
        parent::insert();
    }

    private function _before_image()
    {
        $this->assign("upload_dir", IMG_WATERMARK);
        $this->assign("commed_size", ""); // 上传文件推荐的尺寸
        $this->assign("file_name", "watermark"); //隐藏上传文本域的名称。用于上传
        $this->assign("configTab", 'image');
        $this->assign("tab", "image_setting");
        $this->assign("id", "id"); // URL传值列名
        $this->assign('tableName', "image_setting");
    }

    /**
     * 添加图像
     */
    public function ImageAdd()
    {
        $this->_before_image();
        $this->display();
    }

    /**
     * 编辑路由
     */
    public function edit()
    {
        $tab = $this->in['tab'];
        if ('language' == $tab) {
            $this->LanguageEdit();
        } else if ('image_setting' == $tab) {
            $this->imgEdit();
        }
    }

    /**
     * 语言编辑
     */
    private function  LanguageEdit()
    {
        $this->_before_language();
        $arr = $this->get_url_formatting();
        $where = $arr["where"];
        $vo = $this->db->table("language")
            ->where($where)
            ->find();
        $this->assign('vo', $vo);
        $this->display("WebConfig_languageEdit");
    }

    /**
     * 图像编辑
     */
    private function imgEdit()
    {
        $this->_before_image();
        $arr = $this->get_url_formatting();
        $where = $arr["where"];
        $vo = $this->db->table("image_setting")
            ->where($where)
            ->find();
        $this->assign('vo', $vo);;
        $this->assign("img_url", $vo['watermark']);
        $this->display("WebConfig_imageEdit");
    }

    public function  imageUpdate()
    {
        $this->table_name = "image_setting";
        parent::update();
    }

    public function  languageUpdate()
    {
        $this->table_name = "language";
        parent::update();
    }

    private function _before_language()
    {
        $this->assign("configTab", 'language');
        $this->assign("tab", "language");
        $this->assign("id", "id"); // URL传值列名
        $this->assign('tableName', "language");
        $this->assign("select_option", "edit");
    }

    /**
     * 语言设置
     */
    public function language()
    {
        $this->_before_language();
        $this->assign("tab", "language");
        $info = $this->db->table("language")->select();
        $this->assign("settingList", $info);
        $this->assign("option_del", "no");
        $this->display("WebConfig_languageIndex");
    }

    /**
     * 添加语言
     */
    public function addLanguage()
    {
        $this->display("WebConfig_languageAdd");
    }

    /**
     * 编辑语言
     */
    public function editLanguage()
    {
        $this->display("WebConfig_languageEdit");
    }

    /**
     * 切换语言
     */
    public function  changeLang()
    {
        $id = $_GET['id'];
        setcookie(LANG, $id . '', time() + 86400 * 30, '/');
        $res = $this->db->table("language")->where("id=$id")->find();
        setcookie("LANG_TEXT", $res['language'], time() + 86400 * 30, '/');
        sleep(1);
        $this->success("已切换到:" . $res['language'] . '版,我们建议您刷新浏览器!', 'load');
    }
}

?>