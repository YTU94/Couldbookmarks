<?php
namespace Admin\Controller;
use Think\Controller;

/**
* 课程
*/
class CourseController extends Controller
{
	
	public function index($id=0)
	{
        $condition['course_id'] = $id;
        $classify = M('classify');
        $user = M('users');
        $course = M('course');
        $course_info = M('course_info');

        $users = $user->select();
        $classifys = $classify->select();
        $courses = $course->select();
        $courseInfo = $course_info->where($condition)->select();
        $this->assign('courseInfo', $courseInfo);
        $this->assign('users',$users);
		$this->assign('classifys',$classifys);
		$this->assign('courses',$courses);
		$this->display();
	}

    // public function courseInfo(id) {
    //     $id = id;
    //     $course_info = M('course_info');
    //     $courseInfo = $course_info->where('course_id=${id}')->order('create_time')-limit(10)-select();
    //     $this->assign('courseInfo', $courseInfo);
    //     // $this->display();
    // }

	public function del(){
		$res = $_POST['id'];
		$tabName = 'classify';
		
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('DeleteMessage')->delete($res,$tabName);
        return show(1,'删除成功');
	}
}