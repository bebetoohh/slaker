<?php
namespace User\Controller;
// use Think\Controller;
class ProfileController extends CommonController {
	public function index(){
		//检测用户年审状态，如果未年审，则提示相关信息
		//获取该用户的信息
		echo UID;
		$user = D('User');
		//显示页面提示可以修改的内容，可以修改电话号码和邮箱，其他的信息不可修改
		//修改密码需要另外的页面
		
		// $this->display();
		
	}

}