<?php
import('Admin', 'action');

class BannerAction extends AdminAction
{

    private $children_f = 1;

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "banner_id"); // URL传值列名
        $this->assign('tableName', "banner"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
        $this->assign("upload_dir", BANNER_DIR);
        $this->assign("commed_size", ""); // 上传文件推荐的尺寸
        $this->assign("file_name", "banner_spic"); // 隐藏上传文本域的名称。用于上传
    }

    public function index()
    {
        $list = $this->db->table('banner')
            ->order('banner_order desc')
            ->select();
        
        foreach ($list as $key => $val) {
            $pid = $val['parent_id']; // 分类ID
           
            $res = $this->db->table('banner_sort')
                ->where(array(
                "banner_sort_id" => $pid
            ))
                ->select();
            $list[$key]['parend'] = $res[0]['banner_sort_name'];
        }
        $this->assign('list', $list);
        $this->display();
    }

    private function parent_auth()
    {
        $list = $this->db->table('banner_sort')
            ->order('banner_sort_id desc')
            ->select();
        $this->assign('list', $list);
    }

    public function add()
    {
        $this->parent_auth();
        $this->display();
    }

    public function edit()
    {
        $this->parent_auth();
        $arr = $this->get_url_formatting(); // 格式化URL参数。取出表名。查询条件
        $table = $arr["table_name"];
        $where = $arr["where"];
        $column = $arr["column"];
        $vo = $this->db->table($table)
            ->where($where)
            ->find();
        $this->assign('vo', $vo);
     //   $this->printInfo($vo);
        $this->assign("img_url", $vo['banner_spic']); // 图片路径
        parent::edit();
    }
}
?>