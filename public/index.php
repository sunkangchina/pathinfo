<?php 

include __DIR__.'/../vendor/autoload.php';

/**
* 连接数据库 
*/
$medoo_db_config['db_host'] = '127.0.0.1';
$medoo_db_config['db_name'] = 'ec';
$medoo_db_config['db_user'] = 'root';
$medoo_db_config['db_pwd']  = '111111';
$medoo_db_config['db_port'] = '3306';
include __DIR__.'/../vendor/thefunpower/db_medoo/inc/db/boot.php';

/**
* redis配置 
* predis($host='',$port='',$auth='')
*/

/**
* 启用pathinfo路由
*/
router_pathinfo(); 
/**
* page not find
*/
function pathinfo_not_find(){
	echo 'PAGE 404';
}
