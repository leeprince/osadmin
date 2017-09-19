<?php
require ('../include/init.inc.php');
$name = '';
extract ( $_POST, EXTR_IF_EXISTS );

if (Common::isPost ()) {
	$exist = Area::getAreaByName($name);

	if($exist){
	
		OSAdmin::alert("error",ErrorMessage::AREA_EXIST);
	}else if($name ==""){
		
		OSAdmin::alert("error",ErrorMessage::NEED_PARAM);
	}else{
		$input_data = [ 'name' => $name ];
		$id = Area::addArea ( $input_data );
		
		if ($id) {
			SysLog::addLog ( UserSession::getUserName(), 'ADD', 'Area_add' ,$name, json_encode($input_data) );
			Common::exitWithSuccess ('添加区域成功','panel/areas.php');
		} else {
			OSAdmin::alert('error');
		}
	}
}

Template::assign("_POST" ,$_POST);
Template::display('panel/area_add.tpl' );
