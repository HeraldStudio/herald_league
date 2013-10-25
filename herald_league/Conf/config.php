<?php
return array(
	//'配置项'=>'配置值'
	//数据库配置项
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '121.248.63.106',
	'DB_NAME' => 'herald_league',
<<<<<<< HEAD
	'DB_USER' => 'herald_league',
	'DB_PWD' => 'herald_league_psd',
=======
	'DB_USER' => 'root',
	'DB_PWD' => '12345678',
>>>>>>> dfdce4c8634c2d864815ba65034e86529113f8a1
	'DB_PORT' => 3306,
	'DB_PREFIX' => 'lg_',
	//分组设置
	'APP_GROUP_LIST' => 'User,League,Activity,Admin,Public',
	'DEFAULT_GROUP' => 'Activity',
	
	'URL_MODEL' => 1,
	
	'SHOW_PAGE_TRACE' => true,
	
	'DB_FIELDTYPE_CHECK' => true,
	
	//'VAR_FILTERS' => 'htmlencode',
	
	'TMPL_PARSE_STRING' => array(
	'__Public__' => __ROOT__.'/Public',
	'__Uploads__' => __ROOT__.'/Uploads',
	),

	'LAYOUT_ON' => true,
);
?>