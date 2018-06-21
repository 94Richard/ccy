<?php
import('Admin', 'action');

class MessageAction extends AdminAction
{

    public function __construct()
    {
        parent::__construct();
        $this->assign("id", "message_id"); // URL传值列名
        $this->assign('tableName', "message"); // 分配到模板URL。删除的表名称。
        $this->assign('select_option', "edit");
    }
    
    public function index()
    {

        // 计算总条数。显示分页
        $count = $this->db->table("message")->where($this->lang)->count('message_id');
        import('Page');

        $this->set_list_num(15); // 设置每页分页大小
        $Page = new Page($count, $this->list_num);
        $limit = $Page->firstRow . ',' . $Page->listRows; // 分页SQL

        $info = $this->db->table("message")->where($this->lang)
            ->order("message_id desc")
            ->limit($limit)
            ->select();
        // $this->printInfo($info);
        $this->assign('page', $Page->show());
        $this->assign("list", $info);
        $this->display();
    }

    // 重写父类
    public function edit()
    {
        $arr = $this->get_url_formatting(); // 格式化URL参数。取出表名。查询条件
        $table = $arr["table_name"];
        $where = $arr["where"];
        $column = $arr["column"];

        // 将该信息置为已读
        $this->db->table("message")
            ->where($where)
            ->data(array(
                "is_ready" => 1
            ))
            ->update();

        $info = $this->db->table("message")
            ->where($where)
            ->select();
        // $this->printInfo($info);

        $this->assign("vo", $info[0]);
        $this->display();
    }
}

?>