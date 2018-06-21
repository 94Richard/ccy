<?php
import('Base', 'action');

/**
 * 帮助中心
 * Class HelpAction
 */
class HelpAction extends BaseAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("current", "5");
        $this->assign("helpList", $this->selectBasic(46));
    }

    public function index()
    {

        // $this->printInfo($list);
        $this->display();
    }

    /**
     * 域名注册
     */
    public function  domain()
    {
        $this->display();
    }

    /**
     * 虚拟主机
     */
    public function  virtualHost()
    {
        $this->assign("meta", $this->basic(40));
        $this->assign("current_help_id", 40);
        $this->display();
    }


    /**
     * FQA
     */
    public function  faq()
    {
        $this->assign("meta", $this->basic(59));
        $this->assign("current_help_id", 59);
        $this->display();
    }

    /**
     * 企业邮箱
     */
    public function  mail()
    {
        $this->assign("meta", $this->basic(41));
        $this->assign("current_help_id", 41);
        $this->display();
    }

    /**
     * 400电话
     */
    public function  tel400()
    {
        $this->assign("meta", $this->basic(43));
        $this->assign("current_help_id", 43);


        $this->assign("guest_title", "400方案");
        $this->assign("guest_instructions", "400方案描述！");
        $this->assign("subject", "400电话专栏");

        $this->display("400");
    }

    /**
     *服务器租用
     */
    public function serverRent()
    {
        $this->assign("meta", $this->basic(42));
        $this->assign("current_help_id", 42);
        $this->display();
    }

    /**
     * 跨域请求域名查询
     */
    public function searchDomain()
    {
        $cha = I("post.domain");
        if (!$cha) {
            $this->error("请输入您要查询的域名~");
        }
        if (!$this->isDomain($cha)) {
            $this->error("域名格式不正确!");
        }
        $site = 'http://panda.www.net.cn/cgi-bin/check.cgi?area_domain=' . $cha;
        $xml = file_get_contents($site, 'rb');
        $json = null;
        if ($xml && $xml != null) {
            $json = xml_to_json($xml);  //获取请求后的信息 xml=>json

            if ($json) {
                $json_arr = object_array(json_decode($json)); //json =>array
                $msgArr = explode(":", $json_arr['original']);  //将英文信息转为中文
                if ($msgArr[0] == 210) {
                    $this->success("该域名还没有注册!");
                } else if ($msgArr[0] == 211) {
                    $this->error("域名为:$cha" . "已经被注册！");
                } else if ($msgArr[0] == 213) {
                    $this->error("网络请求超时~");
                } else {
                    $this->error("网络繁忙，请稍后再试~");
                }
            }
        } else {
            $this->error("网络繁忙，请稍后再试~");
        }
    }

    /**
     * 是否为域名
     * @param $domain
     * @return bool
     */
    private function isDomain($domain)
    {
        return !empty($domain) && strpos($domain, '--') === false &&
        preg_match('/^([a-z0-9]+([a-z0-9-]*(?:[a-z0-9]+))?\.)?[a-z0-9]+([a-z0-9-]*(?:[a-z0-9]+))?(\.us|\.tv|\.org\.cn|\.org|\.net\.cn|\.net|\.mobi|\.me|\.la|\.info|\.hk|\.gov\.cn|\.edu|\.com\.cn|\.com|\.co\.jp|\.co|\.cn|\.cc|\.biz)$/i', $domain) ? true : false;
    }

}

?>