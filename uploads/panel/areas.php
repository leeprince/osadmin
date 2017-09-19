<?php
require ('../include/init.inc.php');

$areas = Area::getAllArea();

$confirm_html = OSAdmin::renderJsConfirm('icon-remove', '您确定要删除该区域吗 ?');

Template::assign('areas', $areas);
Template::assign('osadmin_action_confirm', $confirm_html);
Template::display('panel/areas.tpl');
