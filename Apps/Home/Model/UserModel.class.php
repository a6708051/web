<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	protected $tableName = 'user';
	protected $fields = array('id', 'adate', 'account_number', 'password', 'nickname', 'email', 'status');
	
	
}