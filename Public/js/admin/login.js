/*
*前端登录业务
*/

var login = {
	check : function(){
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		console.log(password);
		if(!username){
			dialog.error('用户名不能为空');
		}
		if(!password){
			dialog.error('密码不能为空');
		}

		/*ajax 后台验证*/
		var url = '/index.php?m=admin&c=login&a=check';
		var data = {'username': username , 'password' : password};
		// 执行异步请求  $.post
		$.post(url,data,function(result){
			console.log(result);
			if(result.status == 0){
				return dialog.error(result.message);
			}
			if(result.status == 1){
				console.log('去后台');
				return dialog.success(result.message, '/index.php?m=admin&c=index&a=index');
			}
		},'JSON');		
	}

}