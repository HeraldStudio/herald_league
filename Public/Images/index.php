<?php
define('APP_DEBUG', true);
define ( 'APP_NAME', 'App' );
define ( 'APP_PATH', './App/' );
define ( 'K_ROOT', dirname ( __FILE__ ) );
//如果你的server不支持$_SERVER变量 请将这里修改你的项目url地址  eg: http://localhost/yourdemo
define ( 'K_LINK', '/swfupload4tp');
include  './ThinkPHP/ThinkPHP.php';
