<?php 
require('../include/init.inc.php');
$addr = $area_id = $description = '';
extract($_POST, EXTR_IF_EXISTS);

if ( Common::isPost() ) {
	$addr = Common::checkFormFilter($addr);

	$site = AreaList::getSiteByName($addr);

	if ( ! empty($site) ) {
		Common::exitWithError(ErrorMessage::SITE_EXIST, '/panel/sites.php');
	}

	if ( $addr == '' || $area_id == '' ) {

		OSAdmin::alert('error', ErrorMessage::NEED_PARAM);
	} else {

		$insert_data = [
			'area_id'     => $area_id,
			'addr'        => $addr,
			'description' => $description,
		];

		$id = AreaList::addSite($insert_data);

		if ($id) {
			SysLog::addLog(UserSession::getUserName(), 'MODIFY', 'Sites_modify', $id, json_encode($site));
			Common::exitWithSuccess('添加站点成功 ', '/panel/sites.php');	
		} else {	
			OSAdmin::alert('error');
		}
	}
}

$area_options = Area::getAreaForOptions();

Template::assign('area_options', $area_options);
Template::assign('_POST', $_POST);

Template::display('panel/sites_add.tpl');