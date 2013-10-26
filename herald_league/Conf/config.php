<?php
return array(
        //'配置项'=>'配置值'
        //数据库配置项
        'DB_TYPE' => 'mysql',
        'DB_HOST' => 'localhost',
        'DB_NAME' => 'herald_league',

        'DB_USER' => 'root',
        'DB_PWD' => '123456',
        'DB_PORT' => 3306,
        'DB_PREFIX' => 'lg_',
        //分组设置
        'APP_GROUP_LIST' => 'User,League,Activity,Admin,Public',
        'DEFAULT_GROUP' => 'Activity',
        
        'URL_MODEL' => 1,
        
        'DB_FIELDTYPE_CHECK' => true,
        
        //'VAR_FILTERS' => 'htmlencode',
        
        'TMPL_PARSE_STRING' => array(
        '__Public__' => __ROOT__.'/Public',
        '__Uploads__' => __ROOT__.'/Uploads',
        ),

        'LAYOUT_ON' => true,
);
?>