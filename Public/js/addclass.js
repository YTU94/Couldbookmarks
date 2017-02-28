/*
* 添加分类
*/

var addclass = {
    check : function() {
        // 获取登录页面中的用户名 和 密码

		var classify = $('input[name="addclassify"]').val();
		//console.log(classify);        

		// post验证
        var url = "/index.php?m=home&c=index&a=check";
        var data = {'classify':classify};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            var res = result;
            console.log(res);
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {

                return dialog.success(result.message, '/index.php?m=home&c=index&a=index');
            }

        },'JSON');

    },

    del : function(id) {
        var url = "/index.php?m=home&c=index&a=del";
        var data = {'id':id};

        // 执行异步请求  $.post
        $.post(url,data,function(result){
            var res = result;
            console.log(res);            
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {

                return dialog.success(result.message, '/index.php?m=home&c=index&a=index');
            }

        },'JSON');

    },

        delClass : function(id) {
        var url = "/index.php?m=admin&c=index&a=del";
        var data = {'id':id};

        // 执行异步请求  $.post
        $.post(url,data,function(result){
            var res = result;
            console.log(res);            
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {

                return dialog.success(result.message, '/index.php?m=admin&c=index&a=index');
            }

        },'JSON');

    }

}