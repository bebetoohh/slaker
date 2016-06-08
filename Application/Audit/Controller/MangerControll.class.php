<?php
//该类不继承CommonController类，需要判断用户是否为团队的负责人
namespace Audit\Controller;
use Think\Controller;
class MangerController extends Controller {
		public function index(){
		echo CONTROLLER_NAME;
	}
}