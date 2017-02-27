<?php
namespace Common\Model;
use Think\Model;

/**
* 删除信息
*/
class DeleteMessageModel extends Model
{
	
	public function delete($id)
	{
		$_db = M('messages');
		$_id = $id;

		$map['id'] = $_id;
		$_db->where($map)->delete();

	}
}