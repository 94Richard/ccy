<?php
import('', 'action');
import('Page');

// 加载基础action
class BaseAction extends Action
{

    protected $db;
    // 数据库类对象
    protected $search_where = array();
    // 列表页面查询条件，用于构造sql语句
    protected $search_value = array();
    // 列表页面查询条件，用于表单赋值
    protected $db_data = array();
    // 用于保存insert,update的数据
    protected $table_name = '';
    // 表名
    protected $order_by = 'id desc';
    // 排序
    protected $list_num = 20;
    // 每页显示记录数
    private $db_conn = null;
    public $defaultImg = "web_up_file/noPic_spic/no_image.gif";

    protected $lang;

    // 返回数据库连接
    public function get_db_conn()
    {
        return $this->db_conn;
    }

    // 设置每页显示常量
    public function set_list_num($list_num)
    {
        $this->list_num = $list_num;
    }

    public function printInfo($info)
    {
        echo '<pre>';
        print_r($info);
        echo '</pre>';
    }

    public function __construct()
    {
        $this->db = new db();
        $conn = $this->db->getConn();
        $this->db_conn = ($conn) ? $conn : false;

        parent::__construct();
        $this->assign('session', $_SESSION[SESSION_NAME]);
        $this->assign("web_dir", BASE_DIR); // 网站物理根目录
        // 获取网站配置表数据
        $info = $this->db->table("web_config")->select();
        $this->getMenu();
        $this->assign("config", $info[0]);
        $this->assign('defaultImg', $this->defaultImg);
    }


    // 获取表名
    protected function get_table()
    {
        return $this->table_name ? $this->table_name : parse_name(ACTION_NAME);
    }

    // 设置表名称
    protected function set_table($table)
    {
        $this->table_name = $table;
    }

    // 获取字段信息.有缓存,更改数据表结构记得删除缓存
    protected function getFields($table = '')
    {
        $cache_path = CACHE_PATH . 'fields/';
        if (!$table) {
            $table = $this->get_table();
        }

        $fields = F($table, '', $cache_path);
        if ($fields)
            return $fields;
        $query = $this->db->query('SHOW COLUMNS FROM ' . DB_PREFIX . $table);
        $result = $this->db->getAll($query);
        $fields = array();
        foreach ($result as $v) {
            $fields[] = $v['Field'];
        }
        F($table, $fields, $cache_path);
        return $fields;
    }

    // 根据数据表字段信息获取POST数据
    protected function getPostData($table = '')
    {
        $fields = $this->getFields($table);
        $data = array();
        foreach ($fields as $k) {
            if (isset($_POST[$k]) && !is_array($_POST[$k]))
                $data[$k] = trim($_POST[$k]);
        }
        $this->db_data = $data;
        return $data;
    }
    // 更新，插入的前置操作
    // 通常用来验证数据，或填充数据
    protected function _before_update()
    {
    }

    protected function _before_insert()
    {
    }

    // 删除后置操作 (通常用来删除关联数据)
    protected function _after_delete($id)
    {
    }

    // 检查、得到要操作的ID，比如删除、设置状态时用到
    protected function check_id($id)
    {
    }

    protected function get_id()
    {
        $id = $_REQUEST['id'];
        if (empty($id)) {
            $this->error('请选择要操作的记录！');
        }
        if (!is_array($id)) { // 批量支持，不是数组搞成数组，这样就一视同仁了
            $id = (array)$id;
        }
        $this->check_id($id);
        return $id;
    }

    // 公用的列表页查询方法
    protected function _search()
    {
        if ($_POST['search_where']) {
            $where = array();
            foreach ($_POST['search_where'] as $key => $val) {
                foreach ($val as $k => $v) {
                    if ($v == '')
                        continue; // if(!$v)这样写法如果值为0不行
                    if ($k == 'like') {
                        $where[$key] = array(
                            $k,
                            '%' . $v . '%'
                        );
                    } elseif ($k == 'exp') {
                        $v = explode('-', $v);
                        $where[$key] = array(
                            $v[0],
                            (int)$v[1]
                        );
                    } elseif ($k == 'and' || $k == 'or') {
                        foreach ($v as $k2 => $v2) {
                            if ($v2 == '')
                                continue;
                            if ($k2 == 'gt_date') {
                                $where[$key][] = array(
                                    'gt',
                                    strtotime($v2)
                                );
                            } elseif ($k2 == 'lt_date') {
                                $where[$key][] = array(
                                    'lt',
                                    strtotime("$v2 +1 day")
                                );
                            } else {
                                $where[$key][] = array(
                                    $k2,
                                    $v2
                                );
                            }
                        }
                        if ($where[$key])
                            $where[$key][] = $k;
                    } else {
                        $where[$key] = array(
                            $k,
                            $v
                        );
                    }
                }
            }
            $this->search_where = array_merge($this->search_where, $where);
            $_SESSION['search_where'] = $this->search_where;
            $this->search_value = array_merge($this->search_value, $_POST['search_where']);
            $_SESSION['search_value'] = $this->search_value;
        }
    }

    // 列表数据格式化
    protected function format_list(&$list)
    {
    }

    // 默认列表页
    public function index()
    {
        $table = $this->get_table();
        if ($_GET['do'] == 'search') { // 查询
            $this->_search();
            $this->search_where = $_SESSION['search_where'];
            $this->search_value = $_SESSION['search_value'];
            $this->assign('search_where', $this->search_value);
        }
        $count = $this->db->table($table)
            ->where($this->search_where)
            ->count('id');
        if ($count == 0)
            $this->display();
        import('Page');
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $list = $this->db->table($table)
            ->where($this->search_where)
            ->order($this->order_by)
            ->limit($limit)
            ->select();
        $this->format_list($list);
        $page = $Page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    // 默认内容页
    public function view()
    {
        $this->edit();
    }

    // 默认编辑页
    public function edit()
    {
        $arr = $this->get_url_formatting(); // 格式化URL参数。取出表名。查询条件
        $table = $arr["table_name"];
        $where = $arr["where"];
        $column = $arr["column"];
        $vo = $this->db->table($table)
            ->where($where)
            ->find();

        $this->assign('vo', $vo);
        $this->display();
    }

    // Ajax 上传操作
    public function ajax_upload()
    {
        if ($_FILES) {
            $file_name = ""; // <input file>标签的name 名称
            foreach ($_FILES as $key => $val) {
                $file_name = $key;
            }
            import('AjaxUpload'); // 引入AJax上传类
            $dir = (isset($_POST['dir'])) ? trim($_POST['dir']) : $this->error("AJax上传的目录不存在");
            $AjaxUpload = new AjaxUpload('Image', $_FILES[$file_name], array(
                "parent_dir" => 'web_up_file/',
                "children_dir" => "$dir" . '/'
            ));
            $res = $AjaxUpload->start_upload();
            if (is_array($res)) {
                exit(json_encode($res));
            } else {
                exit('AJax上传错误!');
            }
        }
    }

    // AJax删除上传的图片
    public function ajax_delete_upload()
    {
        if (isset($_POST['imagename'])) {
            if (file_exists(trim($_POST['imagename']))) {
                unlink($_POST['imagename']);
                exit('文件删除成功!');
            }
            exit('文件路径不存在!');
        }
    }

    // 返回URL要参数的表名称
    public function get_url_table()
    {
        // 如果存在表名。则用post 传值过来的表名称
        if ($_REQUEST['tab']) {
            $table = trim($_REQUEST['tab']);
            $this->set_table($table);
        } else {
            $table = $this->get_table();
        }
        return $table;
    }

    // 格式化URL参数
    public function get_url_formatting()
    {
        $table = $this->get_table();
        $column = trim($_REQUEST['name']); // 自增长ID
        if ($column) { // 字段名称： 例如： ID=id值
            $where[$column] = (int)$_REQUEST['id'];
        } else {
            // 部分表。没有主键。
            if (!isset($_REQUEST['id'])) {
                $where = '1=1';
            } else {
                $where['id'] = (int)$_REQUEST['id'];
            }
        }
        return array(
            "table_name" => $table,
            "where" => $where,
            "column" => $column
        );
    }

    public function add()
    {
        $this->display();
    }

    // 默认更新操作
    public function update()
    {
        $arr = $this->get_url_formatting(); // 格式化URL参数。取出表名。查询条件
        $table = $arr["table_name"];
        $where = $arr["where"];
        $column = $arr["column"];
        // echo "<pre>"; print_r($arr); echo "<pre>";exit();
        // 收集数据
        $this->getPostData($table);
        // 更新之前操作
        $this->_before_update();
        unset($this->db_data[$column]); // id是更新条件，不是要更新的字段
        $result = $this->db->table($table)
            ->where($where)
            ->data($this->db_data)
            ->update(); // 进行更新

        if ($result > 0) {
            $this->success('更新成功！');
        } elseif ($result === 0) {
            $this->error('没有变化！');
        } else {
            $this->error('更新失败！');
        }
    }

    // 默认插入操作
    public function insert()
    {
        $table = $table = $this->get_url_table();
        // 收集数据
        $this->getPostData();
        // 插入之前操作
        $this->_before_insert();
        // 进行插入
        $result = $this->db->table($table)
            ->data($this->db_data)
            ->insert();
        if ($result > 0) {
            $this->success('新增成功！');
        } else {
            $this->error('新增失败！');
        }
    }

    // 默认删除操作
    public function delete()
    {
        $table = $this->get_url_table();
        $id = $this->get_id();
        $msg = '删除成功！';
        $type = 'refresh';
        $err = 0;
        foreach ($id as $v) {
            $where[$_REQUEST['name']] = (int)$v;
            $result = $this->db->table($table)
                ->where($where)
                ->delete();
            if ($result > 0) {
                $this->_after_delete($where['id']);
            } else {
                $err++;
                $msg = "删除出错！{$err}条数据无法删除！";
                $type = 'error';
            }
        }
        $this->success($msg, $type);
    }

    // 默认设置状态操作
    public function status()
    {
        $table = $this->get_table();
        $id = $this->get_id();
        $data['status'] = $_GET['status'] == 1 ? 1 : 0;
        $msg = '设置成功！';
        $type = 'refresh';
        $err = 0;
        foreach ($id as $v) {
            $where['id'] = (int)$v;
            $result = $this->db->table($table)
                ->where($where)
                ->data($data)
                ->update();
            if (!$result > 0) {
                $err++;
                $msg = "出错！{$err}条数据无法成功设置！";
                $type = 'error';
            }
        }
        $this->success($msg, $type);
    }

    // 菜单
    public function getMenu()
    {
        $web = $this->db->table("web_config")->where()
            ->limit(0, 1)->find();

        //客服QQ
        if (strstr($web['qq'], "|")) {
            $qq_arr = explode("|", $web['qq']);
            $qq = $qq_arr[0];
        } else {
            $qq = $web['qq'];
        }
        $this->assign("qq", $qq);

        //服务号码
        if (strstr($web['web_phone'], "|")) {
            $phone = explode("|", $web['web_phone']);
        } else {
            $phone = array($web['web_phone']);
        }
        $this->assign("server_tel", $phone);

        $this->assign("web", $web);

        // 产品分类列表
        $pro_list = $this->db->table("product_sort")->select();
        $this->assign("pro_list", $pro_list);

        // 基础业务-帮助中心
        $this->assign("basic_Business", $this->selectBasic(46));

        //移动应用
        $this->assign("basic_mobile", $this->selectBasic(48));

        //网络推广
        $this->assign("extension", $this->selectBasic(50));

        //新闻中心
        $this->assign("news_footer", $this->db->table("news_sort")->order("news_sort_order desc")->select());

        //关于我们
        $this->assign("basic_about", $this->selectBasic(44));

        //系统定制
        $this->assign("basic_system", $this->selectBasic(49));


    }

    //单页分类查询
    public function selectBasic($basic_one_id)
    {
        return $this->db->table("basic")->where("basic_one_id=$basic_one_id")->order("basic_order desc")->select();
    }

    public function basic($id)
    {
        return $this->db->table("basic")->where("basic_id=$id")->find();
    }

    //400显示页面
    public function show_400()
    {

    }
} // 类定义结束
?>