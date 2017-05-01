<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src='./Public/js/addclass.js'></script>
	<script src='./Public/js/dialog.js'></script>
	<script src='./Public/js/dialog/layer.js'></script>

</head>
<body>


<div class="container text-center">
<a href="/couldbookmarks/index.php?m=home&c=index&a=index" class="btn btn-large btn-primary" style="text-decoration: none;float: right;position: relative; top: 40px;right: 60px;">回到首页</a>
	<h1 style="margin:180px 0 80px 0; ">分类管理</h1>
	<div class="col-md-12 text-center">
		<div class="col-md-2"><h1 style="line-height: .1;">现有分类:</h1></div>
		<ul class="list-group col-md-8">
			<?php if(is_array($classifys)): $i = 0; $__LIST__ = $classifys;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$classify): $mod = ($i % 2 );++$i;?><li class="list-group-item text-left" style=""><?php echo ($classify["cname"]); ?> <button class="btn" style="display: inline-block;float: right;position: relative;top: -7px;" type="button" onclick="addclass.delClass(<?php echo ($classify["id"]); ?>)">删除</button></li><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
		</ul>
	</div>

	<h1 style="margin:180px 0 80px 0; ">用户管理</h1>
	<div class="col-md-12 text-center">
		<div class="col-md-2"><h1 style="line-height: .1;">现有用户:</h1></div>
		<ul class="list-group col-md-8">
			<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><li class="list-group-item text-left" style=""><?php echo ($user["username"]); ?> <button class="btn" style="display: inline-block;float: right;position: relative;top: -7px;" type="button" onclick="addclass.delClass(<?php echo ($user["id"]); ?>)">删除</button></li><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
		</ul>
	</div>
</div>	
</body>
</html>