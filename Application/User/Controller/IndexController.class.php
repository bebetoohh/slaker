<?php
namespace User\Controller;
// use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	echo "hahahah";
        if(UID){
        	$this->meta_title = '投稿平台首页';
        	$this->display();
        }else{
        	$this->redirect('Home/Index/index');
        }
    }
}