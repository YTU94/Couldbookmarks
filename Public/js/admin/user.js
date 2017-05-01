/*
*y用户管理业务
*/
//注册
var user = {
	register : function(){
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		var email = $('input[name="email"]').val();
		if(!username){
			dialog.error('用户名不能为空');
		}
		if(!password){
			dialog.error('密码不能为空');
		}
		if(!email){
			dialog.error('邮箱不能为空');
		}

		/*ajax 后台验证*/
		var url = '/couldbookmarks/index.php?m=Admin&c=Register&a=check';
		var data = {'username': username , 'password' : password, 'email' : email};
		// 执行异步请求  $.post
		$.post(url,data,function(result){
			if(result.status == 0){
				return dialog.error(result.message);
			}
			if(result.status == 1){
				debugger
				return dialog.success(result.message, '/couldbookmarks/index.php?m=admin&c=login&a=index');
			}
		},'JSON');			
	}
}
//登录
var login = {
	check : function(){
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		console.log('password');
		if(!username){
			dialog.error('用户名不能为空');
		}
		if(!password){
			dialog.error('密码不能为空');
		}

		/*ajax 后台验证*/
		var url = '/couldbookmarks/index.php?m=admin&c=register&a=check';
		var data = {'username': username , 'password' : password};
		// 执行异步请求  $.post
		$.post(url,data,function(result){
			if(result.status == 0){
				return dialog.error(result.message);
			}
			if(result.status == 1){
				return dialog.success(result.message, '/couldbookmarks/index.php?m=admin&c=index&a=index');
			}
		},'JSON');		
	}

}