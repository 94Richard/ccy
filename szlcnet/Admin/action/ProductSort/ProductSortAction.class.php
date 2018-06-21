<?php
import('Admin', 'action');

class ProductSortAction extends AdminAction
{

    private $tree;

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "product_sort_id"); // URL传值列名
        $this->assign('tableName', "product_sort"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
        $this->assign("upload_dir", PRODUCT_SORT_DIR);
        $this->assign("commed_size", ""); // 上传文件推荐的尺寸
        $this->assign("file_name", "product_sort_spic"); // 隐藏上传文本域的名称。用于上传
    }

    public function index(){
        $info = $this->get_category_nolevel("product_sort", "product_sort_order desc", "product_sort_id");
        $this->assign("list", $info);
        $this->display();
    }

    public function add()
    {
        $this->parent_auth();
        $this->display();
    }

    private function parent_auth()
    {
        $list = $this->db->table('product_sort')->where($this->lang)
            ->order('product_sort_order desc')
            ->select();
        $this->assign('parent_list', $list);
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
        $this->assign("img_url", $vo['product_sort_spic']); // 图片路径
        parent::edit();
    }
}

?>