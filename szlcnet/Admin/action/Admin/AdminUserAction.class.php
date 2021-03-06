<?php
import('Admin','action');
class AdminUserAction extends AdminAction{
    private $role_list=array();
    public function __construct(){
        parent::__construct();
        $this->role_list=$this->db->table('admin_role')->select();
        $this->assign('role',$this->role_list);
        $this->assign('select_option', "edit");
    }
    public function index(){
        //为显示用户角色名称
        $role_name=array();
        foreach($this->role_list as $v){
            $key=$v['id'];
            $val=$v['title'];
            $role_name[$key]=$val;
        }
        $this->assign('role_name',$role_name);
        parent::index();
    }
    //用户授权
    public function auth(){
        $where['id']=(int)$_GET['user_id'];
        if($_POST['update']==1){
            if(is_array($_POST['auth_id'])){
                $data['auth']=implode(',',$_POST['auth_id']);
            }else{
                $data['auth']='';
            }
            $result=$this->db->table('admin_user')->data($data)->where($where)->update();
            if($result>0){
                $this->success('更新成功！');
            }elseif($result===0){
                $this->error('没有变化！');
            }else{
                $this->error('更新失败！');
            }
        }
        $user_info=$this->db->table('admin_user')->field('auth')->where($where)->find();
        $user_auth=explode(',',$user_info['auth']);
        $this->assign('user_auth',$user_auth);
        $auth_list=$this->db->table('admin_auth')->field('id,title,pid')->order('orderid')->select();
        $auth_list=list_to_tree($auth_list);//转换成Tree
        $this->assign('auth_list',$auth_list);
        $this->display();
    }
    //用户修改自己密码
    public function changePwd(){
        if($_POST){
            $where['uname']=$_SESSION[SESSION_NAME]['uname'];
            $where['pwd']=md5(trim($_POST['old_pwd']));
            $result=$this->db->table('admin_user')->where($where)->find();
            if(!$result) $this->error('原密码输入不正确！');
            $this->checkPwd();
            $data['pwd']=md5(trim($_POST['pwd']));
            $result=$this->db->table('admin_user')->where($where)->data($data)->update();
            if($result>0){
                $this->success('修改密码成功！');
            }elseif($result===0){
                $this->error('旧密码和新密码相同！');
            }else{
                $this->error('修改密码失败！');
            }
        }else{
            $this->display();
        }
    }
    //密码检测
    private function checkPwd(){
        $pwd=trim($_POST['pwd']);
        $confirm_pwd=trim($_POST['confirm_pwd']);
        if($pwd!=$confirm_pwd){
            $this->error('两次密码输入不一致！');
        }
        if(strlen($pwd)<6){
            $this->error('密码长度不够！');
        }
        return md5($pwd);
    }
    //用户名检测
    private function checkUser(){
        $uname=trim($_POST['uname']);
        $length=strlen($uname);
        if($length<2 || $length>16){
            $this->error('用户名太短或太长！');
        }
        if(!$this->regex($uname,'uname')){
            $this->error('用户名不能包含特殊字符！');
        }
        $where['uname']=$uname;
        $result=$this->db->table('admin_user')->where($where)->find();
        if($result){
            $this->error('此用户名已经存在！');
        }
        return $uname;
    }
    //新增前操作
    protected function _before_insert(){
        if( $this->db_data['role_id']==1 && $_SESSION[SESSION_NAME]['role_id']!=1 ){
            $this->error('无法新增系统管理员用户！'); // 只有系统管理员才能增加系统管理员用户
        }
        $this->db_data['uname']=$this->checkUser();
        $this->db_data['pwd']=$this->checkPwd();
        $this->db_data['auth']='';//注意！授权字段不能动，保证安全
    }
    //修改前操作
    protected function _before_update(){
        $where['id']=(int)$_POST['id'];
        if($_SESSION[SESSION_NAME]['role_id'] != 1){
            if($this->db_data['role_id'] == 1){ // 只有系统管理员才能将其他角色的用户更改为系统管理员
                $this->error('无法更改用户为系统管理员！');
            }
            $user = $this->db->table('admin_user')->where($where)->find();
            if($user['role_id'] == 1){//只有系统管理员才能更改系统管理员
                $this->error('您无法更改系统管理员！'); 
            }
        }
        if(isset($this->db_data['uname'])){//用户名不能修改
            unset($this->db_data['uname']);
        }
        if(isset($this->db_data['auth'])){//注意！授权字段不能动，保证安全
            unset($this->db_data['auth']);
        }
        if($this->db_data['pwd']!=''){//密码不修改留空
            $this->db_data['pwd']=$this->checkPwd();
        }else{
            unset($this->db_data['pwd']);
        }
    }
    public function status(){
        $id = $this->get_id();
        $data['status']=$_GET['status']==1 ? 1 : 0;
        $msg = '设置成功！';
        $type = 'refresh';
        $err = 0;
        foreach($id as $v){
            $where['id']=(int)$v;
            if($_SESSION[SESSION_NAME]['role_id'] != 1){//非系统管理员只能设置非系统管理员用户
                $where['role_id'] = array('neq',1);
            }
            $result = $this->db->table('admin_user')->where($where)->data($data)->update();
            if(!$result>0){
                $err++;
                $msg = "出错！{$err}条数据无法成功设置！";
                $type = 'error';
            }
        }
        $this->success($msg,$type);
    }
    public function delete(){
        $id = $this->get_id();
        $msg = '删除成功！';
        $type = 'refresh';
        $err = 0;
        foreach($id as $v){
            $where['id'] = (int)$v;
            if($_SESSION[SESSION_NAME]['role_id'] != 1){//非系统管理员只能删除非系统管理员用户
                $where['role_id'] = array('neq',1);
            }
            $result = $this->db->table('admin_user')->where($where)->delete();
            if($result>0){
                $this->_after_delete($where['id']);
            }else{
                $err++;
                $msg = "删除出错！{$err}条数据无法删除！";
                $type = 'error';
            }
        }
        $this->success($msg,$type);
    }
}
?>