<?php

namespace User\Model;
use Think\Model;
class SubmissionModel extends Model{
	// 自动验证规则
	protected $_validate = array(
			array('title', 'require', '标题不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
		);

	// 自动完成规则
	protected $_auto = array(
			array('create_time','getCreateTime',self::MODEL_BOTH,'callback'),
			array('update_time',NOW_TIME,self::MODEL_BOTH),
		);
	public function autoSave(){
		$post = I('post.');
		//检查文档是否符合要求
		
		//触发自动保存的字段
		$save_list = array('title','content');
		foreach ($save_list as $value){
			if(!empty($post[$value])){
				$if_save = true;
				break;
			}
		}

		if(!$if_save){
			$this->error = '您未填写任何内容';
			return false;
		}

		//重置自动验证
		$this->_validate = array(
			array('title', 'require', '标题不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
			array('title','1,20','标题长度不能超过20个字符',self::VALUE_VALIDATE,'length',self::MODEL_BOTH),

			);
		$this->_auto[]= array('status','3',self::MODEL_BOTH);

		if(!($data = $this->create())){
			return false;
		}


		//添加或者新增基础数据
		if(empty($data['id'])){ //新增数据
			$id = $this->add(); //添加基础数据
			if(!$id){
				$this->error = '新增基础内容失败';
				return false;
			}
			$data['id'] = $id;
		}else{
			$status = $this->save();
			if(false === $status){
				$this->error = '更新基础数据出错';
				return false;
			}
		}
		
		//添加或新增扩展内容

		$logic = $this->logic($data['model']); //data['model']是数字，还需要转换成name 

		if(!$logic->autoSave($id)){
            if(isset($id)){ //新增失败，删除基础数据
                $this->delete($id);
            }
            $this->error = $logic->getError();
            return false;
        }
		return $data;
		


	}
	/**
     * 创建时间不写则取当前时间
     * @return int 时间戳
     * @author huajie <banhuajie@163.com>
     */
    protected function getCreateTime(){
        $create_time    =   I('post.create_time');
        return $create_time?strtotime($create_time):NOW_TIME;
    }

    /**
     * 获取扩展模型对象
     * @param  integer $model 模型编号
     * @return object         模型对象
     */
    private function logic($model){
        return D(get_submission_model($model, 'name'), 'Logic');
    }

}