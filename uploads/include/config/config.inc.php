<?php
define('ACCESS', 1); 
error_reporting(E_ALL ^ E_NOTICE);
// autoload 使用常量
define('ADMIN_BASE', dirname (__FILE__) . '/../../include');
define('ADMIN_BASE_LIB', ADMIN_BASE . '/lib/');
define('ADMIN_BASE_CLASS', ADMIN_BASE . '/class/');

// 日志设置
define('ADMIN_BASE_LOG', ADMIN_BASE . '/log/');

// Smarty 模板使用常量
define('TEMPLATE_DIR', ADMIN_BASE . '/template/');
define('TEMPLATE_COMPILED', ADMIN_BASE . '/compiled/');
define('TEMPLATE_PLUGINS', ADMIN_BASE_LIB . 'Smarty/plugins/');
define('TEMPLATE_SYSPLUGINS', ADMIN_BASE_LIB . 'Smarty/sysplugins/');
define('TEMPLATE_CONFIGS', ADMIN_BASE . '/config/');
define('TEMPLATE_CACHE', ADMIN_BASE . '/cache/');

// OSAdmin 常量
define('ADMIN_URL' ,'http://localhost/osadmin/uploads');
// define('ADMIN_URL' ,'http://10.10.10.210/jgx_admin/uploads');
define('ADMIN_TITLE' ,'后台管理系统');
define('COMPANY_NAME' ,'leeprince');
define('FOOTER_NAME' ,'leeprince');
define('VERSION_NUMBER' ,'1.0.1 0919');

// OSAdmin 数据库设置
define('OSA_DB_ID' ,'leeprince');
$DATABASE_LIST[OSA_DB_ID] = array (
	// 本地windows mysql 数据库
	/*'server' => '127.0.0.1',
	'port' => '3306',
	'username' => 'root',
	'password' => 'root',
	'db_name' => 'jgx_massage_chair_admin'*/

	// 虚拟机 ubuntu16 mysql 数据库
	'server' => '10.10.10.210',
	'port' => '3306',
	'username' => 'root',
	'password' => 'leeprince',
	'db_name' => 'leeprince'

);

// sql 调试和错误日志
define('SQL_DEBUG', true);

// COOKIE 加密密钥，建议修改
define('OSA_ENCRYPT_KEY','leeprince!');

// prefix 不要更改，除非修改 osadmin.sql 文件中的所有表名
define('OSA_TABLE_PREFIX' ,'leeprince');

// 页面设置 _20170911
define('DEBUG' ,false);
define('PAGE_SIZE', 25);

$OSADMIN_COMMAND_FOR_LOG = array(	
	'SUCCESS' => '成功',
	'ERROR' => '失败',
	'ADD' => '增加',
	'DELETE' => '删除',
	'MODIFY' => '修改',
	'LOGIN' => '登录',
	'LOGOUT' => '退出',
	'PAUSE' => '封停',
	'PLAY' => '解封',
);

$OSADMIN_CLASS_FOR_LOG = array(
	'ALL' => '全部',
	'User' => '用户',
	'UserGroup' => '账号组',
	'Module' => '菜单模块',
	'MenuUrl' => '功能',
	'GroupRole' => '权限'
);
