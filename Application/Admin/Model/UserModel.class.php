<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	// 获取所有用户列表
	public function userList(){
		$list = M('User')->select();
		foreach ($list as $k => $v){
			$list[$k]['statusTxt'] = $v['status'] == 1?"启用":"禁用";
		}
		return $list;
	}

	public function addNode(){
		if(!$_POST['name']){
			return array('status'=>0,'info'=>'请输入名称');
		}
	}

	
}