<?php
import('Admin', 'action');

class ProductAction extends AdminAction
{

    private $thumb_dir;

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "product";
        $this->id = "product_id";
        $this->assign("id", $this->id); // URL传值列名
        $this->assign('tableName', $this->table_name); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
        $this->assign("upload_dir", PRODUCT_DIR);
        $this->assign("commed_size", ""); // 上传文件推荐的尺寸
        $this->assign("file_name", "product_spic"); // 隐藏上传文本域的名称。用于上传
        $this->thumb_dir = BASE_DIR . "web_up_file/" . PRODUCT_DIR . "_thumb/"; //缩略图存储目录
    }

    /**
     * 生成缩略图
     */
    public function create_thumb()
    {
        $data = explode(",", $this->in['data']);
        if (count($data)) {
            import('ThumbImg');
            import('FileUtil');
            $result = null; //返回客户端缩略图的集合
            foreach ($data as $key => $val) {
                $res = $this->db->table("image_setting")->where(array("id" => 13))->find();  //获取图片设置信息
                //检查原图是否存在,
                if ($val && file_exists(BASE_DIR . $val)) {
                    $currentImg = BASE_DIR . $val;
                    FileUtil::createDir($this->thumb_dir);
                    $arr = explode("/", $val);
                    $thumb_img = explode(".", $arr[count($arr) - 1]);
                    $img = $thumb_img[0] . "_thumb" . '.' . $thumb_img[1];  //缩略图命名
                    $image = new ThumbImg($currentImg, 1, $res['w'], $res['h'], $this->thumb_dir . $img);
                    $image->outimage();
                    //如果有上传水印图
                    if ($res['watermark'] && file_exists(BASE_DIR . $res['watermark']) && file_exists($this->thumb_dir . $img)) {
                        $image2 = new ThumbImg($this->thumb_dir . $img, 3, BASE_DIR . $res['watermark'], $res['option'], $this->thumb_dir . $img);   //使用加图片水印功能
                        $image2->outimage();
                    }
                    $result[$key] = "web_up_file/" . PRODUCT_DIR . "_thumb/" . $img;
                } else {
                    $result[$key] = $this->defaultImg;//无图片
                }
            }
            $this->ajaxReturn($result);
        } else {
            $this->error("当前无产品！");
        }
    }

    //清理图片
    protected function _before_delete($id)
    {
        $res = $this->db->table($this->table_name)->where(array("product_id" => $id[0]))->select();
        if (file_exists(BASE_DIR . $res[0]['product_spic'])) {
            //删除缩略图
            $arr = explode("/", $res[0]['product_spic']);
            $thumb_img = explode(".", $arr[count($arr) - 1]);
            $img = $thumb_img[0] . "_thumb" . '.' . $thumb_img[1];  //缩略图命名
            @unlink($this->thumb_dir . $img);
            @unlink(BASE_DIR . $res[0]['product_spic']); //删除原图
        }
    }

    /**
     * 清空缩略图
     */
    public function clear_thumb()
    {
        import('FileUtil');
        $temp = FileUtil::unlinkDir($this->thumb_dir);//清空目录
        $this->success("已成功清除缓存图片");

    }

    /**
     * 缩略图展示
     */
    public function thumb()
    {
        //获取所有产品图
        ($this->search_where) ? $this->search_where['language'] = 6 : $this->search_where = array("language" => $_COOKIE[LANG]);
        $count = $this->db->table($this->table_name)
            ->where($this->search_where)
            ->count('product_id');
        if ($count == 0)
            $this->display();
        import('Page');
        $this->set_list_num(18); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $list = $this->db->table($this->table_name)
            ->where($this->search_where)
            ->order("product_id desc")
            ->limit($limit)
            ->select();
        $this->format_list($list);
        $page = $Page->show();

        //数据重新组装
        $array = null;
        foreach ($list as $key => $val) {
            $array[$key]['id'] = $val['product_id'];
            $array[$key]['name'] = $val['product_name'];
            $array[$key]['img'] = $val['product_spic'];
        }
        $this->assign('list', $array);
        $this->assign('page', $page);
        $this->display();
    }


    //添加前的操作
    public function  _before_insert()
    {
        if (!$this->in['product_one_id']) {
            $this->error("请选择产品分类!");
        }
        if (!$this->in['product_name']) {
            $this->error("请输入产品名称");
        }
    }


    public function index()
    {
        $this->parent_auth();
        $table = $this->get_table();
        if ($_GET['do'] == 'search') { // 查询
            $this->_search();
            $this->search_where = $_SESSION['search_where'];
            $this->search_value = $_SESSION['search_value'];
            //如果产品分类为0，则移除
            if ($this->search_where['product_one_id'][1] == 0) {
                unset($this->search_where['product_one_id']);
            }
            $this->assign('search_where', $this->search_value);
        }
        if ($_GET['do'] == 'back') { // 添加或者编辑完成后返回
            $this->search_where['product_one_id']=$_GET['product_one_id'];
        }
        ($this->search_where) ? $this->search_where['language'] = $_COOKIE[LANG] : $this->search_where = array("language" => $_COOKIE[LANG]);

        $count = $this->db->table($table)
            ->where($this->search_where)
            ->count($this->id);
        if ($count == 0)
            $this->display();
        import('Page');
        // $this->set_list_num(1); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $list = $this->db->table($this->table_name)->where($this->search_where)
            ->order('product_order desc')
            ->limit($limit)
            ->select();
        foreach ($list as $key => $val) {
            $pid = $val['product_one_id']; // 分类ID
            $res = $this->db->table('product_sort')
                ->where(array(
                    "product_sort_id" => $pid,
                    "language" => $_COOKIE[LANG]
                ))
                ->select();
            $list[$key]['parent'] = $res[0]['product_sort_name'];
        }
        $page = $Page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();

    }

    public function add()
    {
        $this->parent_auth();
        $_CFG['defined_product'] = $this->extend[0]['value'];

        // 格式化自定义参数，并存到数组$product，商品编辑页面中调用商品详情也是用数组$product，
        if ($_CFG['defined_product']) {
            $defined = explode(',', $_CFG['defined_product']);
            $defined_product = '';
            foreach ($defined as $row) {
                $defined_product .= $row . "：\n";
            }
            $product['defined'] = trim($defined_product);
            $product['defined_count'] = count(explode("\n", $product['defined'])) * 2;
        }
        $this->assign('vo', $product);
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
        $product = $this->db->table($table)
            ->where($where)
            ->find();

        // 自定义属性
        $_CFG['defined_product'] = $this->extend[0]['value'];

        if ($_CFG['defined_product'] || $product['defined']) {
            $defined = explode(',', $_CFG['defined_product']);
            $defined_product = '';
            foreach ($defined as $row) {
                $defined_product .= $row . "：\n";
            }
            // 如果商品中已经写入自定义参数则调用已有的
            $product['defined'] = $product['defined'] ? str_replace(",", "\n", $product['defined']) : trim($defined_product);
            $product['defined_count'] = count(explode("\n", $product['defined'])) * 2;
        }
        $this->assign("img_url", $product['product_spic']); // 图片路径
        //  $this->printInfo($product);

        $this->assign('vo', $product);
        $this->display();
        //  parent::edit();
    }
}

?>