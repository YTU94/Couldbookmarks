<?php
namespace Common\Model;
use Think\Model;

/*
* course 课程模型
*/

class CourseModel extends Model{
    public function getAllCourse($username) {
        $_db = M ('course');
        $data = $_db->select();
        return $data;
    }
}