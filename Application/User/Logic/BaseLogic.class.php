<?php

namespace User\Logic;
use Think\Model;

abstract class BaseLogic extends Model{

	// 构造函数
	public function __construct($name = '',$tablePrefix='',$connection =''){
		// 设置默认表前缀
		$this->tablePrefix = C('DB_PREFIX').'submission_';
		parent::__construct($name,$tablePrefix,$connection);
	}

	abstract public function autoSave($id = 0);
}