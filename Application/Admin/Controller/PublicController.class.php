<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function login(){
		if(IS_POST){
			$returnLoginInfo = D('Public')->auth();
		}
	}
	
}
?>