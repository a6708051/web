<?php
namespace Home\Controller;

class LoginController extends CommonController {
    public function index(){
		$this->display();
    }
	
	public function check_account() {
		if (IS_POST) {
			$account = I('post.account');
			$user = M('User');
			$data = $user->where(array('account_number'=>$account, 'status'=>1))->find();
			$id = $data['id'];
			if ($id > 0) {
				$this->_ajax_return(1, 'user is existed');
			}
		}
		$this->_ajax_return(-1, 'user is not existed');
	}
	
	public function login() {
		if(IS_POST) {
			$account = I('post.account');
			$password = I('post.password');
			if (empty($account) || empty($password)) {
				$this->_ajax_return(-1, 'params error');
			}
			
			$user = M('User');
			$data = $user->where(array('account_number'=>$account, 'status'=>1))->find();
			$old_password = $data['password'];
			$new_password = md5(md5($password).'blog');
			if($old_password == $new_password) {
				session('user.user_id', intval($data['id']));
				session('user.account', $data['account_number']);
				session('user.nickname', $data['nickname']);
				
				$this->_ajax_return(1, 'success', array('url'=>'/Manage/article'));
			} else {
				$this->_ajax_return(-1, 'login error');
			}
		}
		$this->_ajax_return(-1, 'login error');
	}
}