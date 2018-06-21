<?php
import('Admin', 'action');

class CaseSortAction extends AdminAction
{

    private $tree;

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "case_sort_id");
        // URL传值列名
        $this->assign('tableName', "case_sort");
        // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
        $this->assign("upload_dir", case_SORT_DIR);
        $this->assign("commed_size", "");
        // 上传文件推荐的尺寸
        $this->assign("file_name", "case_sort_spic");
        // 隐藏上传文本域的名称。用于上传
    }

    public function index()
    {

        $info = $this->get_category_nolevel("case_sort", "case_sort_order desc", "case_sort_id");
        // $this->printInfo($info);
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
        $list = $this->db->table('case_sort')->order('case_sort_order desc')->select();
        $this->assign('parent_list', $list);
    }

    public function edit()
    {
        $this->parent_auth();
        $arr = $this->get_url_formatting();
        // 格式化URL参数。取出表名。查询条件
        $table = $arr["table_name"];
        $where = $arr["where"];
        $column = $arr["column"];
        $vo = $this->db->table($table)->where($where)->find();
        $this->assign('vo', $vo);

        $this->assign("img_url", $vo['case_sort_spic']);
        // 图片路径
        parent::edit();
    }

}

?>