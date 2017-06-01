<?php
namespace Home\Model;
use Think\Model;
class ArticleCatModel extends Model {
	protected $tableName = 'article_cat';
	protected $fields = array('id', 'adate', 'parent_id', 'name', 'desc', 'sort_id', 'status');
	
	
}