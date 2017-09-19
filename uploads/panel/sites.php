<?php 
require('../include/init.inc.php');
$addr = $area_id = $page_no = $search = '';
extract($_GET, EXTR_IF_EXISTS);

if( $method == 'del' || ! empty($id) ) {
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
}

$page_size = PAGE_SIZE;
$page_no   = ( $page_no < 0 || empty($page_no) )?1:$page_no;

if ( $search ) {
	$row_count  = AreaList::countSearch($area_id, $addr);
	$total_page = ( $row_count%$page_size == 0 )?$ow_count/$page_size : ceil($ow_count/$page_size);
	$total_page = ( $total_page < 1 )? 1 : $total_page;
	$page_no    = ( $page_no > $total_page )? $total_page : $page_no;
	$start      = ($page_no - 1) * $page_size;

	$lists      = AreaList::search($area_id, $addr, $start, $page_size);
} else {
	$row_count  = AreaList::count();
	$total_page = ( $row_count%$page_size == 0 )?$ow_count/$page_size : ceil($ow_count/$page_size);
	$total_page = ( $total_page < 1 )? 1 : $total_page;
	$page_no    = ( $page_no > $total_page )? $total_page : $page_no;
	$start      = ($page_no - 1) * $page_size;

	$lists      = AreaList::getAllSite($start, $page_size);
}

$areas = Area::getAllArea();

foreach( $lists as &$list ) {
	$area_id = $list['area_id'];

	foreach( $areas as $area ) {
		$id = $area['id'];
		if( $area_id == $id ) {
			$list['area_name'] = $area['name'];
		} 
	}
}

$page_html = Pagination::showPager("sites.php?area_id={$area_id}&addr={$addr}&search={$search}", $page_no, $page_size, $total_page);

$confirm_html = OSAdmin::renderJsConfirm('icon-remove', '您确定要删除该站点吗 ?');

$area_options = Area::getAreaForOptions();
$area_options[0] = '全部';
ksort($area_options);

Template::assign('lists', $lists);
Template::assign('_GET', $_GET);
Template::assign('page_html', $page_html);
Template::assign('osadmin_action_confirm', $confirm_html);
Template::assign('area_options', $area_options);
Template::display('panel/sites.tpl');


