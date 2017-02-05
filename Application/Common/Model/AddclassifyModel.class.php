<?php
namespace Common\Model;
use Think\Model;
/**
* 添加分类操作
*/
class AddclassifyModel extends Model
{


	public function addclassify($classify) {
		$_db = M('messages');
		$data['classify'] = $classify;
		print_r($data); 
		$_db->data($data)->add();
		
	} 
}
