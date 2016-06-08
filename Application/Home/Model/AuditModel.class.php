<?php
namespace Home\Model;
use Think\Model;

class AuditModel extends Model{
	public function login($username,$password){
		$map = array();
		if(ereg("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+",$username)){
			$map['email'] = $username;
		}else{
			$map['eid'] = $username;
		}
		//获取用户数据
		$user = $this->where($map)->find();
		if(is_array($user) && $user['status']){		//status 为-1的时候表示未备案 0为禁用 1为正常
			if( md5($password) === $user['password']){
				$this->updateLogin($user['uid']);
				return $user['uid'];
			}else{
				return -2; //密码错误
			}
		}else{
			return  -1; //用户不存在或者被禁用
		}
	}

	/**
	 * 更新用户登录信息
	 * @param interger $uid 用户id
	 */
	protected function updateLogin($uid){
		$data = array(
			'uid'				=> $uid,
			'login'       	    => array('exp', '`login`+1'),
			'last_login_time'	=> NOW_TIME,
			'last_login_ip'		=> get_client_ip(1),
			);
		$this->save($data);

		$res = $this->where($uid)->find();
		// action_log('user_login', 'member', $uid, $uid);
		/* 记录登录SESSION和COOKIES */
        $auth = array(
            'uid'             => $res['uid'],
            'username'        => $res['name'],
            'last_login_time' => $res['last_login_time'],
        );
        session('user_auth', $auth);
        session('user_auth_sign', data_auth_sign($auth));
	}

	






}
