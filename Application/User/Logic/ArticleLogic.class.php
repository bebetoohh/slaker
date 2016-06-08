<?php

namespace User\Logic;

class ArticleLogic extends BaseLogic{
	protected $_validate = array(
			array('content', 'require', '内容不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
		);

	public function autoSave($id = 0){


		
		$this->_validate = array();
		$data = $this->create();
		if(!$data){
			return false;
		}
		if(empty($data['id'])){
			$data['id'] = $id;
			$id = $this->add($data);
			if(!$id){
				$this->error = '新增详细内容失败!';
				return false;
			}
		}else{
			$status = $this->save($data);
			if(false === $status){
				$this->error = '更新详细内容失败!';
				return false;
			}
		}
		return true;
	}
}