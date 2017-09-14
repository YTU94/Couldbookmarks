<?php
namespace Common\Model;
use Think\Model;
/**
* 添加分类操作
*/
class AddclassifyModel extends Model
{


	public function addclass($classify) {
		$_db = M('classify');
		$data['cname'] = $classify;
		$_db->data($data)->add();
		
	} 
}
