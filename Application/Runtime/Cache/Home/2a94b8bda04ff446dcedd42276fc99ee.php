<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src='/Public/js/addclass.js'></script>
	<script src='/Public/js/dialog.js'></script>
	<script src='/Public/js/dialog/layer.js'></script>

	<style>
		* { font-family: "Microsoft Yahei"; font-weight: 200; }
		.mb-20 { margin-bottom: 20px; }
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 style="line-height: 100px;">云标签</h3>
			</div>
		<form action="" method="post">			
			<div class="col-md-12">
				<h4 style="line-height: 100px;">新建分类</h4>
				<input type="text" name="addclassify">
				
				<button class="btn" type="button" onclick="addclass.check()">添加</button>
			</div>	

			<div class="col-md-12">
					
				<div class="row mb-20">
					<label class="col-md-3 text-right">简介</label>
					<div class="col-md-5">
						<input type="text" name="name" class="form-control">
					</div>
				</div>

				<div class="row mb-20">
					<label class="col-md-3 text-right">URL地址</label>
					<div class="col-md-5">
						<input type="text" name="content" class="form-control">	
					</div>
				</div>

				<div class="row mb-20">
					<label class="col-md-3 text-right">分类</label>
					<div class="col-md-5">
						<select name="sclassify" id="class" value="">
							<?php if(is_array($classifys)): $i = 0; $__LIST__ = $classifys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify): $mod = ($i % 2 );++$i;?><option value='<?php echo ($classify["cname"]); ?>'><?php echo ($classify["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
						</select>
					</div>
				</div>
		</form>
				<div class="row">
					<div class="col-md-3 col-md-offset-3">
						<button class="btn btn-primary" name="submit" type="submit">提交</button>
					</div>
				</div>

			</div>
		</div>

		<div class="col-md-12">
				<h3 style="line-height: 100px;">书签列表</h3>
		</div>
	
		<div class="col-md-12">
			<?php if(is_array($messages)): $i = 0; $__LIST__ = $messages;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><div class="panel panel-default mb-20">
				<div class="panel-heading">简介：<?php echo ($message["name"]); ?></div>
				<div class="panel-body">
					<?php echo ($message["content"]); ?>
				</div>
				<div class="panel-footer text-right">
					分类: <span style="color: red;"><?php echo ($message["classify"]); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp;时间：<?php echo ($message["created_at"]); ?>
				</div>
			</div><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
		</div>

	</div>

	<div class="container-fluid">
		<div class="row text-center" style="margin-top: 100px; line-height: 50px;">
			<p>Copyright message.co</p>
		</div>
	</div>

</body>
</html>