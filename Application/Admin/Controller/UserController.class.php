<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {
    // 用户列表
    public function index(){
        $this->assign('list',D('User')->userlist());
        $this->display();
    }
    public function addNode(){
        if(IS_POST){
            $this->checkToken();
            header('Content-Type:application/json;charset=utf-8');
            echo json_encode(D("User")->addNode());
        }else{
            $this->assign('info',$this->getPid(array('level'=>1)));
            $this->display("editNode");
        }
    }
	public function addRole(){
		if (IS_POST) {
            $this->checkToken();
            header('Content-Type:application/json; charset=utf-8');
            echo json_encode(D("Access")->editRole());
        } else {
            $M = M("Role");
            $info = $M->where("id=" . (int) $_GET['id'])->find();
            if (empty($info['id'])) {
                $this->error("不存在该角色", U('Access/roleList'));
            }
            $this->assign("info", $this->getRole($info));
            $this->display("editNode");
        }
	}




    private function getPid($info){
        return $info;

    }
}