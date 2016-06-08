<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function user(){
		if(!IS_POST) $this->error('页面不存在');
		if(I('post.account')==''||I('post.password')=='') $this->error('账户和密码不能为空');
		if(ereg("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+",I('post.account'))) {
			$map['email']=I('post.account');
		}else{
			$map['eid']= I('post.account');
		}
		$map['password']=md5(I('post.password'));

		// p($map);
		$user = M("User");
		$result = $user -> where($map) -> find();
		if(!$result) $this->error('账号或密码错误');
		//写入session跳转到相应平台
		// p($result);
		// echo $result['uid'];
		session(null);
		session('userid',$result['uid']);
		
		
		$this->success($result['name'].'欢迎回来！',U('User/Index/index'));
		

	}
	
}