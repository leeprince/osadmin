<?php 
require ('../include/init.inc.php');
$method = $id = '';
extract( $_GET, EXTR_IF_EXISTS );

if( $method == 'del' && ! empty ($id) ){

	$list = Area::getAreaList($id);

	if ( count($list) > 0 ) {
		OSAdmin::alert("error",ErrorMessage::HAVE_AREA);
	} else {
		$area = Area::getAreaById ($id);
		$result = Area::delArea ($id);

		if ($result) {
			Syslog::addLog(UserSession::getUserName(), 'DELETE', 'Area', $id, json_encode($area));

			Common::exitWithSuccess('已将区域删除', 'panel/areas.php');
		} else {
			OSAdmin::alert('error');
		}
	}
} else {
	OSAdmin::alert("error",ErrorMessage::LACK_PARAM);
}