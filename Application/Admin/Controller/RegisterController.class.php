<?php
namespace Admin\Controller;
use Think\Controller;

/**
*注册 
*/
class RegisterController extends Controller
{
	public function index(){
		$this->display();
	}

	public function check(){
    	$username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];


        D('AddUser')->adduser($username,$password,$email);

		return show(1,"注册成功");
	}
}