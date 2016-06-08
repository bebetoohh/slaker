<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>Slaker System</h1><p>正在开发！</p><br/><a href="'.U('Admin/Index/index').'">Admin</a></div>','utf-8');
        // $department = M("Department");
        // $o = M("Organization");
        // $datalist[] = array('class'=>'2','title'=>'南湖新闻网');
        // $datalist[] = array('id'=>'402000','class'=>'400000','title'=>'期刊社');
        // $datalist[] = array('id'=>'403000','class'=>'400000','title'=>'现代教育技术中心');
        // $datalist[] = array('id'=>'404000','class'=>'400000','title'=>'作物遗传改良国家重点实验室');
        // $datalist[] = array('id'=>'405000','class'=>'400000','title'=>'农业微生物学国家重点实验室');
        // $datalist[] = array('id'=>'406000','class'=>'400000','title'=>'高等教育研究所');
        // $datalist[] = array('id'=>'407000','class'=>'400000','title'=>'后勤集团');
        // $datalist[] = array('id'=>'408000','class'=>'400000','title'=>'资产经营公司');
        // $datalist[] = array('id'=>'409000','class'=>'400000','title'=>'附属学校');
        // $datalist[] = array('id'=>'411000','class'=>'400000','title'=>'校医院');
        
        
        // if($o->addAll($datalist)){echo "y";}else{echo "n";}

        // $result = $department -> select();
        // var_dump($result);
        $this->display();

    }
}