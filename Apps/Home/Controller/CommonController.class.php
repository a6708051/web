<?php
namespace Home\Controller;
use Think\Controller;
     
class CommonController extends Controller {

	public function _ajax_return($code=1, $msg='', $data=array()) {
		$result = array('code'=>$code, 'msg'=>$msg);
		if (!empty($data)) {
			$result = array_merge($result, $data);
		}
		echo json_encode($result);exit;
	}
	
   


	
   
	
}
