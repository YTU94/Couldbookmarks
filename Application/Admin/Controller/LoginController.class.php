<?php

namespace Admin\Controller;

use Think\Controller;

/**
* 后台登录
*/
class LoginController extends Controller
{
	
	public function index()
	{
		$this->display();
	}

    public function check() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            return show(0,'用户名不能为空');
        }
        if(!trim($password)) {
            return show(0,'密码不能为空');
        }

        // $ret = D('Admin')->getAdminByUsername($username);
        
        // if(!$ret || $ret['status'] !=1) {
        //     return show(0,'该用户不存在');
        // }

        // if($ret['password'] != getMd5Password($password)) {
        //     return show(0,'密码错误');
        // }

        //D("Admin")->updateByAdminId($ret['admin_id'],array('lastlogintime'=>time()));

        session('adminUser', $ret);
        return show(1,'登录成功');


    }
}