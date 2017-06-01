<?php
/*
$db_config = require 'db_config.php';
$config = array(
	//'配置项'=>'配置值'
);
return array_merge($db_config, $config);
*/
return array(
	'URL_CASE_INSENSITIVE'  =>  true,  
	'URL_ROUTER_ON'	=> true,
//	'URL_MODEL' => 2,
	'LOAD_EXT_CONFIG' => 'db_config',
	'TMPL_EXCEPTION_FILE'=>'./Apps/Home/View/Public/404.php',
);
