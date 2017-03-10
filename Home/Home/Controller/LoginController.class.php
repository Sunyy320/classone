<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $username=$_POST['username'];
        $pwd=md5($_POST['pwd']);

        $where=array(
            'username'=>$username,
            'pwd'=>$pwd
        );
        $user=M('Users');
        $count=$user->where($where)->count();
        $arr=$user->field('id')->where($where)->find();
        if($count>0){
            $_SESSION['username']=$username;
            $_SESSION['id']=$arr['id'];
            $this->redirect('Index/index');
        }else{
            $this->error("用户名不存在或密码错误");
        }
    }

    public function  reg(){
        $user=D("Users");
        if(!$user->create()){
            $this->error($user->getError());
        }else{
            $this->redirect('Index/index');
        }
    }
}