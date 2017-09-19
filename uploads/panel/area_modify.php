<?php 
require('../include/init.inc.php');
$id = $name = '';
extract($_REQUEST, EXTR_IF_EXISTS);

Common::checkParam($id);

$area = Area::getAreaById($id);

if ( empty($area) ) {
	Common::exitWithError(ErrorMessage::AREA_NOT_EXIST);
}

if( Common::isPost() ){
	if( $name == '') {
		OSAdmin::alert('error', ErrorMessage::NEED_PARAM);
	} else {
		$name = Common::checkFormFilter($name);

		$area_by_name = Area::getAreaByName($name);

		if ( ! empty($area_by_name) && $area['name'] != $name) {
			Common::exitWithError(ErrorMessage::AREA_EXIST);
		}

		$updata_data = [ 'name' => $name ];
		$result = Area::updateAreaById($id, $updata_data);

		if( $result ) {
			SysLog::addLog (UserSession::getUserName(), 'MODIFY', 'Area_modfiy', $id, json_encode($updata_data));

			Common::exitWithSuccess('更新成功', 'panel/areas.php');
		} else {
			OSAdmin::alert('error');
		}
	}
}

Template::assign('name', $area['name']);
Template::display('panel/area_modify.tpl');