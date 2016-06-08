<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>Slaker System - Home - Reg</h1></div>','utf-8');
        $this->display();
    }
    public function user(){
    	$this->display();
    }
    public function addUser(){
    	if(!IS_POST){
    		$this->error('非法请求');
    	}
    	// var_dump($_POST);
    	if(I('post.ecard')==""||I('post.name')==''||I('post.organization')==''||I('post.department')==''||I('post.mobile')==''||I('post.password')==''){
    		$this->error('有未填写的表单');
    	}
    	$user = M('User');
    	$map['eid'] = I('post.ecard');
    	echo $map['eid'];
    	$result = $user->where($map)->select();
    	echo $user->getLastSql();
    	if($result){
    		$this->error('该一卡通账号已经注册过');
    	}
    	$map['name'] = I('post.name');
    	$map['organization'] = I('post.organization');
    	$map['department'] = I('post.department');
    	$map['mobile'] = I('post.mobile');
    	$map['password'] = md5(I('post.password'));
    	$map['email'] = I('post.email');
    	$map['reg_time']=time();
    	$map['reg_ip']=ip2long(get_client_ip());    //ip2long 是PHP 函数 还有对应的long2ip

    	// p($map);
    	if($user->data($map)->add()){$this->success('注册成功','Home/index');}else{$this->error('注册失败，请联系管理员');}

    		
    	
    }
}