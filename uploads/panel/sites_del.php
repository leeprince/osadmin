<?php 
require('../include/init.inc.php');
$id = $method = '';
extract($_GET, EXTR_IF_EXISTS);

if ( $method == 'del' || ! empty($id) ) {
	$siteInfo = AreaList::getSiteById($id);

	if( count($siteInfo) <= 0 ) {
		OSAdmin::alert('error', ErrorMessage::SITE_NOT_EXIST);
	} else {
		$result = AreaList::delSite($id);

		if ( $id ) {
			SysLog::addLog( UserSession::getUserName(), 'DELETE', 'Sites', $id, json_encode($siteInfo) );
			Common::exitWithSuccess('删除站点成功 ', 'panel/sites.php');
		} else {
			OSAdmin::alert('error');
		}
	}
} else {
	OSAdmin::alert('error', ErrorMessage::LACK_PARAM);
}