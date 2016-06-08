<?php
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller {
	protected function _initialize(){
		
        // p(session('user_auth'));
		define('UID',is_login());
		if(!UID){
			$this->error('还未登录',U('Home/Public/login'));
		}

        //判断用户资料是否齐全，并判断用户是否已经进行线下备案
        //判断角色 如果不等于 user 则显示错误授权。
        
        if(session('user_auth.type') != 'User'){
            //应当先销毁SESSION，否则陷入死循环
            session('user_auth', null);
            session('user_auth_sign', null);
            $this->error('用户授权错误，请联系管理员');
        }

        //收集用户权限
        

		
	}

}