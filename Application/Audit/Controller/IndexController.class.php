<?php
namespace Audit\Controller;
// use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>Slaker System - User</h1><p>正在开发！</p><br/><a href="'.U('Admin/Index/index').'">Admin</a></div>','utf-8');
        echo session('userid');
        $this->display();

    }
}