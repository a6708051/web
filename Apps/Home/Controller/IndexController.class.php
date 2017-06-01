<?php
namespace Home\Controller;

class IndexController extends CommonController {
    public function index(){
		$article = M('article');
		$where = "where status>0";
		$sql = "select * from blog_article $where order by release_day desc,id desc";
		$list = $article->query($sql);
		
		$article_cat = M('article_cat');
		$where = "where status>0";
		$sql = "select * from blog_article_cat $where";
		$category = $article_cat->query($sql);
		
		$this->assign('list', $list);
		$this->assign('category', $category);
		$this->display();
    }
	
	public function details() {
		$id = I('id');
		$article = M('article');
		$data = $article->where(array('id'=>$id, 'status'=>1))->find();
		if (empty($data['id'])) {
			$this->redirect_root('/Index');
		}
		$article_cat = M('article_cat');
		$where = "where status>0";
		$sql = "select * from blog_article_cat $where";
		$category = $article_cat->query($sql);
		
		$this->assign('data', $data);
		$this->assign('category', $category);
		$this->display();	
	}
	
	
	
}
