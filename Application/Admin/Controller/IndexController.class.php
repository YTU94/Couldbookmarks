<?php
namespace Admin\Controller;
use Think\Controller;

/**
* ºóÌ¨Ê×Ò³
*/
class IndexController extends Controller
{
	
	public function index()
	{
        $classify = M('classify');
        $classifys = $classify->select();
		$this->assign('classifys',$classifys);
		$this->display();
	}

	public  function del(){
		$res = $_POST['id'];
		$tabName = 'classify';
		
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('DeleteMessage')->delete($res,$tabName);
        return show(1,'删除成功');
	}
}