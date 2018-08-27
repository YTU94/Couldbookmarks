<?php
namespace Course\Controller;
use Think\Controller;

/**
* ºóÌ¨Ê×Ò³
*/
class IndexController extends Controller
{
	
	public function index()
	{
        $course = D('Course')->select();
        // $this->assign('users',$users);
        // $this->assign('classifys',$classifys);
        // $this->assign('course', $course);
        // $this->display();
        return show(1, 'success', $course);

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