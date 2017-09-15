<?php
namespace Common\Model;
use Think\Model;
/*
*添加用户操作
*/
class AddUserModel extends Model
{
	
	public function adduser($username,$password,$email)
	{
		$_db = M('users');
		$data['username'] = $username;
		$data['password'] = $password;
		$data['email'] = $email;

		$_db->data($data)->add();
	}
	public function checkLogin($username, $password) {
		$_db = M('users');
		$data = $_db->where('username = '+ $username +')->getFiled('password');
	}
}