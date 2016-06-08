<?php

namespace User\Controller;
use Think\Controller;

class CommonController extends Controller{
	// User 公共控制器初始化 改由Common/CommonController处理
	// protected function _initialize(){
        
 //        // p(session('user_auth'));
        
	// 	define('UID',is_login());
	// 	if(!UID){
	// 		$this->error('还未登录',U('Home/Index/index'));
	// 	}

 //        //判断用户资料是否齐全，并判断用户是否已经进行线下备案
 //        //判断角色 如果不等于 user 则显示错误授权。
        
 //        if(session('user_auth.type') != 'User'){
 //            //应当先销毁SESSION，否则陷入死循环
 //            session('user_auth', null);
 //            session('user_auth_sign', null);
 //            $this->error('用户授权错误，请联系管理员');
 //        }
        

		
	// }

	 /**
     * 通用分页列表数据集获取方法
     *
     *  可以通过url参数传递where条件,例如:  index.html?name=asdfasdfasdfddds
     *  可以通过url空值排序字段和方式,例如: index.html?_field=id&_order=asc
     *  可以通过url参数r指定每页数据条数,例如: index.html?r=5
     *
     * @param sting|Model  $model   模型名或模型实例
     * @param array        $where   where查询条件(优先级: $where>$_REQUEST>模型设定)
     * @param array|string $order   排序条件,传入null时使用sql默认排序或模型属性(优先级最高);
     *                              请求参数中如果指定了_order和_field则据此排序(优先级第二);
     *                              否则使用$order参数(如果$order参数,且模型也没有设定过order,则取主键降序);
     *
     * @param array        $base    基本的查询条件
     * @param boolean      $field   单表模型用不到该参数,要用在多表join时为field()方法指定参数
     * @author 朱亚杰 <xcoolcc@gmail.com>
     *
     * @return array|false
     * 返回数据集
     */
    protected function lists($model , $where = array() , $order = '' , $base = array('status' => array('egt',0)) , $field = true){
    	$options = array();
    	
    	$REQUEST = (array)(I('request.'));
    	

    	if(is_string($model)){  //如果传递过来的model是字符串的话，折实例化该模型
    		$model = M($model);
    	}
		$OPT        =   new \ReflectionProperty($model,'options');
        $OPT->setAccessible(true);
    	$pk = $model->getPk(); //获得模型的主键

    	if($order===null){
            //order置空
        }else if ( isset($REQUEST['_order']) && isset($REQUEST['_field']) && in_array(strtolower($REQUEST['_order']),array('desc','asc')) ) {
            $options['order'] = '`'.$REQUEST['_field'].'` '.$REQUEST['_order'];
        }elseif( $order==='' && empty($options['order']) && !empty($pk) ){
            $options['order'] = $pk.' desc';
        }elseif($order){
            $options['order'] = $order;
        }
        unset($REQUEST['_order'],$REQUEST['_field']);

        $options['where'] = array_filter(array_merge( (array)$base, /*$REQUEST,*/ (array)$where ),function($val){
            if($val===''||$val===null){
                return false;
            }else{
                return true;
            }
        });
        if( empty($options['where'])){
            unset($options['where']);
        }
        $options      =   array_merge( (array)$OPT->getValue($model), $options );
        $total        =   $model->where($options['where'])->count();

        if( isset($REQUEST['r']) ){
            $listRows = (int)$REQUEST['r'];
        }else{
            $listRows = C('LIST_ROWS') > 0 ? C('LIST_ROWS') : 10;
        }
        $page = new \Think\Page($total, $listRows, $REQUEST);
        if($total>$listRows){
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        }
        $p =$page->show();
        $this->assign('_page', $p? $p: '');
        $this->assign('_total',$total);
        $options['limit'] = $page->firstRow.','.$page->listRows;

        $model->setProperty('options',$options);

        return $model->field($field)->select();

    }
}