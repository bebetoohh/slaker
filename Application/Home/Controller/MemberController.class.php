<?php

namespace Home\Controller;
use Think\Controller;

class MemberController extends Controller{

	/*登录处理*/
	public function login($username = '',$password = '' ,$type = 1){
		if(IS_POST){
			$member = ($type == 1) ? D('User') : D('Audit'); //type 1 为记者user登录 否则为编辑登录audit
			$uid = $member -> login($username,$password);

			
			if(0 < $uid){  //登录成功
				$t = ($type == 1)? "User" : "Audit";
				$this->success('登录成功',U($t.'/Index/index'));

			}else{	//登录失败
				switch($uid){
					case -1: $error = '用户不存在或者被禁用！';break;
					case -2: $error = '密码错误！';break;
					default: $error = '未知错误！';break; // 0-接口参数错误
				}
				$this->error($error);
			}
		}else{
			$this->error('页面不存在');
		}
	}

	/**
     * 注销当前用户
     * @return void
     */
    public function logout(){
        session('user_auth', null);
        session('user_auth_sign', null);
        $this->success('退出成功！', U('Home/Index/index'));
    }
    /**
     * 注册用户
     * 根据type 显示注册界面
     */
    public function reg(){
    	$type = I('get.type',0);
    	if($type == 'user'){
    		$this->display('Reg/user');	
    	}else if($type == 'audit'){
    		$this->display('Reg/audit');
    	}else{
    		$this->error('页面不存在');
    	}
    }
}

