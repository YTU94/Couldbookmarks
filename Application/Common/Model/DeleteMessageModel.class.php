<?php
namespace Common\Model;
use Think\Model;

/**
* 删除信息
*/
class DeleteMessageModel extends Model
{
	
	public function delete($id,$tableName)
	{
		$_db = M($tableName);
		$_id = $id;

		$map['id'] = $_id;
		$_db->where($map)->delete();

	}
}