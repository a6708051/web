<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_CACHE_ON' => false,
	'TMPL_TEMPLATE_SUFFIX'  =>  '.php',     // 默认模板文件后缀
	'TMPL_PARSE_STRING'=>array(          
		'[!Public]'=>__ROOT__.'/Apps/Home/View/Public/',
		'DEFAULT_FILTER'        => 'htmlspecialchars'
	), 
);