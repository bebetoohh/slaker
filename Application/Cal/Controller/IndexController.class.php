<?php
namespace Cal\Controller;
use Common\Controller\CommonController;
// use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $show = "<h3>这里是".MODULE_NAME."模块</h3>";
        $show = $show.session('userid');
        $show = $show.session('user_auth');
        // p(session('user_auth'));
        $this->assign('show',$show);
        $this->display();

    }
}