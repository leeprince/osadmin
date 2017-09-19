<?php 
require('../include/init.inc.php');
$id = $addr = $area_id = $description = '';
extract($_REQUEST, EXTR_IF_EXISTS);

Common::checkParam($id);
$site = AreaList::getSiteById($id);

if ( empty($site) ) {
	Common::exitWithError(ErrorMessage::SITE_NOT_EXIST);
}

if ( Common::isPost() ) {
	if ( $addr == '' || $area_id == '' ) {
		OSAdmin::alert('error', ErrorMessage::NEED_PARAM);
	} else {
		$addr = Common::checkFormFilter($addr);

		$site_by_name = AreaList::getSiteByName($addr);

		if ( ! empty($site_by_name) && ($site['addr'] != $addr) ) {
			Common::exitWithError(ErrorMessage::SITE_EXIST);
		}
		
		$update_data = [
			'area_id'     => $area_id,
			'addr'        => $addr,
			'description' => $description,
		];

		$result = AreaList::updateSiteById($id, $update_data);

		if ($result) {
			SysLog::addLog(UserSession::getUserName(), 'MODIFY', 'AreaList', $id, json_encode($site));
			Common::exitWithSuccess('更新站点成功 ', '/panel/sites.php');	
		} else {	
			OSAdmin::alert('error');
		}
	}
}

$area_options = Area::getAreaForOptions();

Template::assign('site', $site);
Template::assign('area_options', $area_options);

Template::display('panel/sites_modify.tpl');