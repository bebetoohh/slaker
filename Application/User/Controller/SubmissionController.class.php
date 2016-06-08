<?php
namespace User\Controller;
// use Think\Controller;
class SubmissionController extends CommonController {
    public function index(){
        $this->display();
    }

    public function add(){
    	// p(session());
    	// die;

    	$model_id = I('get.model_id',0);
        empty($model_id) && $this->error('该分类未绑定模型！');
        switch ($model_id) {
        	case '1':
        		$model['id'] = $model_id;
        		$model['name'] = '文章';
                $model['tpl'] = 'article';
        		break;
            case '2':
                $model['id'] = $model_id;
                $model['name'] = '组图';
                $model['tpl'] = 'picture';
                break;
        	default:
        		$this->error('未知文档类型');
        		break;
        }
        $this->assign('model',$model);
        $this->display();
    }

    public function autoSave(){
    	$res = D('Submission')->autoSave();
    	

    	if($res !== false){

    		$return['data'] = $res;
    		$return['info'] = '保存草稿成功';
    		$return['status'] = 1;
    		$this->ajaxReturn($return);

    	}else{
    		$this->error('保存草稿失败'.D('Submission')->getError());
    	}

    }

    public function draftBox(){
        $Submission = D('Submission');
        $map = array('status' => 3,'uid' => UID);
        $list = $this->lists($Submission,$map); //list函数
        // p($list);
        

        $this->assign('list',$list);
        $this->meta_title='草稿箱';
        $this->display();

    }
}