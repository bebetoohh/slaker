<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function department(){
		$this->display();
	}
	// 验证token信息
	protected function checkToken(){
		if(IS_POST){
			if(!M("User")->autoCheckToken($_POST)){
				die(json_encode(array('status' => 0,'info'=>'令牌验证失败' )));
			}
			unset($_POST[C('TOKEN_NAME')]);
		}

	}
}
?>