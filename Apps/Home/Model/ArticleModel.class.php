<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model {
	protected $tableName = 'article';
	protected $fields = array('id', 'adate', 'title', 'content', 'browsing_number', 'comment_number', 'cat_id', 'release_day', 'create_user', 'open_id', 'sort_id', 'status');
	
	
}