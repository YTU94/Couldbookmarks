<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="">
		<span>用户名</span><input type="text" name="username" id="">
		<span>密码</span><input type="text" name="password" id="">
		<input type="button" value="登录" onclick="login.check()">
	</form>

<script src="./Public/js/admin/login.js"></script>
<script src="./Public/js/jquery.js"></script>
<script src="./Public/js/dialog/layer.js"></script>
<script src="./Public/js/dialog.js"></script>
</body>
</html>