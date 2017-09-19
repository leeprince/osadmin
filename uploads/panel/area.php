<?php 
require ('../include/init.inc.php');
$id = $list_ids = $area_id = '';
extract($_REQUEST, EXTR_IF_EXISTS);

Common::checkParam($id);

$area = Area::getAreaById($id);

if ( empty($area) ) {
	Common::exitWithError(ErrorMessage::AREA_NOT_EXIST, 'panel/groups.php');
}

if( Common::isPost() ) {

	if( empty($area_id) || empty($list_ids) ) {
		OSAdmin::alert('error', ErrorMessage::NEED_PARAM);
	} else {
		print_r($list_ids);
		$update_data = ['area_id' => $area_id];
		$update_condition = ['id' => $list_ids];
		$result = AreaList::batchUpdateSite($update_data, $update_condition);

		if($result) {
			$list_ids = implode(',', $list_ids);
			SysLog::addLog(UserSession::getUserName(), 'MODIFY', 'Area', $list_ids, json_encode($update_data));

			Common::exitWithSuccess('更新成功', 'panel/areas.php');
		} else {
			OSAdmin::alert('error');
		}
	}
}

$lists = AreaList::getSiteByArea($id);
$area_options = Area::getAreaForOptions();

Template::assign('lists', $lists);
Template::assign('area_options', $area_options);
Template::assign('myselect', $id);
Template::assign('area_name', $area['name']);
Template::display('panel/area.tpl');