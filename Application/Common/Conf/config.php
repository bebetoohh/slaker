<?php
if(file_exists("data/conf/db.php")){
	$db=include "data/conf/db.php";
}else{
	$db=array();
}
if(file_exists("data/conf/config.php")){
		$runtime_config=include "data/conf/config.php";
}else{
    $runtime_config=array();
}
$configs = array(

	'URL_MODEL'=>0,			//url采用普通模式，为的是提高模板的修改效率
	'TMPL_PARSE_STRING'=>array(	//兼容../public的配置
  		'__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
  		
	),

);

return  array_merge($configs,$db,$runtime_config);