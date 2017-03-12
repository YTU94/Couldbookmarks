/*
* 添加分类
*/

var addclass = {
    check : function() {
        // 获取登录页面中的用户名 和 密码
		var classify = $('input[name="addclassify"]').val();      
		// post验证
        var url = "/couldbookmarks/index.php?m=home&c=index&a=check";
        var data = {'classify':classify};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
             if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/couldbookmarks/index.php?m=home&c=index&a=index');
            }

        },'JSON');

    },
/*
* 删除Messages
*/
    delMessage : function(id) {
        var url = "/couldbookmarks/index.php?m=home&c=index&a=delMsg";
        var data = {'id':id};

        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/couldbookmarks/index.php?m=home&c=index&a=index');
            }

        },'JSON');

    },
/*
* 删除分类
*/
        delClass : function(id) {
        var url = "/couldbookmarks/index.php?m=admin&c=index&a=del";
        var data = {'id':id};

        // 执行异步请求  $.post
        $.post(url,data,function(result){
            
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/couldbookmarks/index.php?m=admin&c=index&a=index');
            }

        },'JSON');

    }

}