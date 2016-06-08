<?php





/**
* 友好显示数组，调试用
* p()函数，友好显示数组，开发阶段调试用
*/
function p($array){
	dump($array,1,'<pre>',0);
}


/**
* 检测用户是否登录
* @return integer 0-未登录,大于0-当前登录用户ID
* @author bb2
*/
function is_login(){
	$user = session('user_auth');
	
	if(empty($user)){
		return 0;	//使UID为0
	}else{
		return session('user_auth_sign')==data_auth_sign($user) ? $user['uid'] : 0;  //使UID为用户ID
	}
}

/**
* 数据签名认证
* @param array $data 被认证的数据
* @return string 签名
* @author bb2
*/
function data_auth_sign($data){
	//数据类型检测
	if(!is_array($data)){
		$data = (array)$data;
	}
	ksort($data); //将键值进行排序
	$code = http_build_query($data);
	$sign = sha1($code);
	return $sign;
}
/**
 * 根据ID获取到组织的其他信息
 * @param  [type] $id    [description]
 * @param  [type] $field [description]
 * @return [type]        [description]
 */
function get_organization($id,$field = null){
	static $list;
	/* 非法的组织ID */
	if(empty($id) || !is_numeric($id)){
		return '';
	}
	/* 读取缓存数据 */
	if(empty($list)){
		$list = S('sys_organization_list');
	}

	if(!isset($list[$id])){
		$organ = M('Organization')->find($id);
		if(!$organ || 1 != $organ['status']){ //分类不存在，或被禁用
			return '';
		}
		$list[$id]=$organ;
		S('sys_organization_list',$list);//更新缓存
	}
	return is_null($field) ? $list[$id] : $list[$id][$field];
}

/**
 * 获取文档模型信息
 * @param  integer $id    模型ID
 * @return array
 */
function get_submission_model($id = null ,$field = null){
    if(!isset($id)){
    	return false;
    }
    switch ($id) {
    	case 1: $array= array('name' => 'article', 'title' => '文章' );	break;
    	case 2: $array= array('name' => 'picture', 'title' => '组图' ); break;
    	case 3: $array= array('name' => 'wenxue', 'title' => '文学' ); break;
    	case 4: $array= array('name' => 'media', 'title' => '音箱' ); break;
    	default: return false;    		    		break;
    }
    if(is_null($field)){
    	return $array['name'];
    }else{
    	return $array[$field];
    }

}

//获取用户头像
function get_aveter(){


}

/**
 * 时间戳格式化
 * @param int $time
 * @return string 完整的时间显示
 * @author huajie <banhuajie@163.com>
 */
function time_format($time = NULL,$format='Y-m-d H:i'){
    $time = $time === NULL ? NOW_TIME : intval($time);
    return date($format, $time);
}

/**
 * 年审检测函数
 * @param  string  $annual [description]
 * @return 直接返回相关数据         [description]
 */
function is_annual($annual = ''){
	//构造年检时间,为每年的9月10日
	$date = strtotime(date("Y")."-9-10");
	//echo date("Y-m-d H:i:s", $date);
	//需要判断当前日期，当前日期大于年检日期的时候，才激活年检功能
	if(time()-$date>0){
		//判断用户的年审字段和年审时间比较，大于的话，这表示年检通过
		if($annual > $date){
			echo "年检通过";
		}else{
			echo "立即年检";
		}
	}

}
?>