<?php
import('','action');//加载基础action
class UserAction extends Action{
    public function login(){
        $url=U(array('a'=>'Home','f'=>'index'));
        if(isset($_SESSION[SESSION_NAME])){       
            redirect($url);
        }else{
            if( $this->autoLogin() ) redirect($url);
            $this->display();
        }
    }
    public function check(){
        $verify_code=trim($_POST['verify_code']);

        if(!$verify_code || md5($verify_code)!=$_SESSION['verify_code']){
            $this->error('验证码错误！');
        }
        $uname = trim($_POST['uname']);
        $pwd = trim($_POST['pwd']);
        $this->_check($uname,$pwd);
    }
    private function _check($uname,$pwd,$return=false){
        $where['uname'] = $uname;
        $where['pwd'] = md5($pwd);
        $db=new db();
        $user=$db->table('admin_user')->where($where)->find();
        if($user){
            if($user['status']!=1){
                if($return) return false;
                $this->error('此用户被锁定！');
            }
            $role_info=$db->table('admin_role')->field('auth,status')->where('id='.$user['role_id'])->find();
            if($role_info){
                if($role_info['status']!=1){
                    if($return) return false;
                    $this->error('此用户组被锁定！');
                }
                if($role_info['auth'] && $user['auth']){ //合并用户组权限和用户单独权限
                    $auth = $role_info['auth'].','.$user['auth'];
                }else{
                    $auth = $user['auth']?$user['auth']:$role_info['auth'];
                }
                $auth_array=explode(',',$auth);
                $auth_array=array_unique($auth_array);//去重复
                $_SESSION[SESSION_NAME]['auth']=$auth_array;
                $_SESSION[SESSION_NAME]['role_id']=$user['role_id'];//主要是标识是否系统管理员，role_id为1便是系统管理员
            }else{
                if($return) return false;
                $this->error('此用户组不存在！');
            }
            $_SESSION[SESSION_NAME]['uname']=$where['uname'];
            if($return) return true;
            if(isset($_POST['remember'])){
                $arr = array('uname'=>$uname,'pwd'=>$pwd);
                $auth = _authcode(serialize($arr),'ENCODE');
                setcookie(AUTH_NAME,$auth,time()+86400*30,'/');
            }
            $this->success('登录成功',SUCCESS_CODE);
        }else{
            if($return) return false;
            unset($_SESSION['verify_code']);//登录失败，当前验证码失效。需要重新生成验证码。要不然验证码有毛用。
            $this->error('账号不存在或密码错误！',ERROR_CODE);
        }
    }
    private function autoLogin(){
        if(isset($_COOKIE[AUTH_NAME])){
            $auth = _authcode($_COOKIE[AUTH_NAME]);
            $arr = unserialize($auth);
            if(isset($arr['uname']) && isset($arr['pwd'])){
                return $this->_check($arr['uname'],$arr['pwd'],true);
             }
        }
    }
    public function logout(){
        setcookie(AUTH_NAME,'',time()-3600,'/');
        unset($_SESSION[SESSION_NAME]);
        $url=U(array('m'=>'User','a'=>'login'));
        redirect($url);
    }
}
?>