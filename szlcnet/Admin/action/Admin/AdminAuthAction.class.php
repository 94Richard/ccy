<?php
import('Admin', 'action');

class AdminAuthAction extends AdminAction
{
    private $children_f = 1;
    protected $order_by = 'id asc,orderid desc';

    public function __construct()
    {
        parent::__construct();
        $this->assign('select_option', "edit");
        $this->assign('children_f', 0); // 编辑的时候。是否调用子类的方法
        $this->assign("tab", "admin_auth");
        $this->assign("id", "id"); // URL传值列名
        $this->assign('tableName', "admin_auth"); // 分配到模板URL。删除的表名称。
    }

    public function get_children()
    {
        return $this->children_f;
    }

    protected function _after_delete($id)
    { // 父亲删除了，孩子也一起删除
        $where['pid'] = $id;
        $this->db->table('admin_auth')
            ->where($where)
            ->delete();
    }

    private function parent_auth()
    {
        $list = $this->db->table('admin_auth')
            ->where('pid=0')
            ->order('orderid')
            ->select();
        $this->assign('parent_auth', $list);
    }

    public function index()
    {
        if ($_GET['do'] == 'search') { // 查询
            $this->_search();
            $this->search_where = $_SESSION['search_where'];
            $this->search_value = $_SESSION['search_value'];
            $this->assign('search_where', $this->search_value);
        }
        $list = $this->db->table('admin_auth')->where($this->search_where)
            ->order('id asc,orderid desc')
            ->select();
        $list = list_to_tree($list); // 转换成Tree
        $this->assign('list', $list);
        parent::index();
    }

    public function add()
    {
        $this->parent_auth();
        $this->display();
    }

    public function edit()
    {
        $this->parent_auth();
        parent::edit();
    }
}

?>