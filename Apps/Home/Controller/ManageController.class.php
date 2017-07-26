<?php
namespace Home\Controller;

class ManageController extends CommonController {
	private $_login_user_id;
	public function __construct() {
		parent::__construct();
		$login_user_id = session('user.user_id');
		if (empty($login_user_id)) {
			$this->redirect_root('/Login/');
		}
		$this->_login_user_id = $login_user_id;
	}
	
    public function article() {
		if (IS_POST) {
			$keyword = trim(I('post.keyword'));
		}
		$where = "status>=0";
		if (!empty($keyword)) {
			$where .= " and (title like '%$keyword%' or content like '%$keyword%')";
		}
		$article = M('article');
		$count = $article->table("blog_article")->where($where)->count();
		$Page = new \Think\Page($count, 40);
		$show = $Page->show();
		$limit = 'limit '.($Page->firstRow.',').$Page->listRows;
		$sql = "select * from blog_article where $where {$limit}";
		$list = $article->query($sql);
		
		$this->assign('keyword', $keyword);
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
    }
	
	public function editor() {
		$id = intval(I('id'));
		if (empty($id)) {
			//$this->error('找不到该数据');
		}
		$article = M('article');
		$data = $article->where(array('id'=>$id))->find();
		if (empty($data['id'])) {
			//$this->error('找不到该数据');
		}
		
		
		$this->assign('data', $data);
		$this->display();
	}
	
	public function change() {
		$id = intval(I('id'));
		if (empty($id)) {
			$this->error('找不到该数据');
		}
		$article = M('article');
		$data = $article->where(array('id'=>$id))->find();
		if (empty($data['id']) || $data['status']<0) {
			$this->error('找不到该数据');
		}
		$status = $data['status']>0 ? 0 : 1;
		$upd['status'] = $status;
		if ($article->where('id='.$id)->save($upd)) {
			$this->success('修改成功', '/Manage/article');
		} else {
			$this->error('修改失败');
		}
		
	}
	
	public function del() {
		$id = intval(I('id'));
		if (empty($id)) {
			$this->_ajax_return(-1, 'can not find this message');
		}
		$article = M('article');
		$data['status'] = -1;
		if ($article->where('id='.$id)->save($data)) {
			$this->_ajax_return(1, 'update success');
		} else {
			$this->_ajax_return(-2, 'update failed');
		}
	}
	
	public function add() {
		$article = M('article');
		$article_id = I('post.id');
		$data['title'] = I('post.title');
		$data['content'] = I('post.content');
		$data['cat_id'] = I('post.cat_id');
		$data['release_day'] = date('Y-m-d');
		$data['create_user'] = $this->_login_user_id;
		$data['open_id'] = 0;
		
		$data['cat_id'] = $data['cat_id']>0 ? $data['cat_id'] : 1;
		
		if (empty($data['title']) || empty($data['content'])) {
			$this->error('请输入标题或内容');
		}
		
		if ($article_id > 0) {
			$rs = $article->where('id='.$article_id)->save($data);
		} else {
			$rs = $article->add($data);
		}
		
		if ($rs !== false) {
			$this->success('保存成功', '/Manage/article');
		} else {
			$this->error('保存失败');
		}
	}
	
	
}
