<?php
class GroupRole {
	public static function getGroupRoles($group_id) {
		if (! $group_id || ! is_numeric ( $group_id )) {
			return false;
		}
		$data = Module::getAllModules (1);
		//用户组的权限
		foreach ( $data as $k => &$module ) {
			$list = MenuUrl::getListByModuleId ($module ['module_id'] ,"role");
			foreach ( $list as $menu ) {
				if ( $menu['father_menu'] == 0) {
					$module['menu_info'] [$menu['menu_id']] ['name'] = $menu['menu_name'];

					$menu_id = $menu['menu_id'];
					$chirld_info = array();
					foreach($list as $v) {
						if($v['father_menu'] == $menu_id) {

							$chirld_info[$v['menu_id']] = $v['menu_name'];
						}
					}
					$module['menu_info'] [$menu['menu_id']] ['menu_chirld'] = array();

					$module['menu_info'] [$menu['menu_id']] ['menu_chirld'] = $chirld_info;
					$module['menu_info'] [$menu['menu_id']] ['menu_chirld'] [$menu['menu_id']] = $menu['menu_name'];				

					ksort($module['menu_info'] [$menu['menu_id']] ['menu_chirld']);

				}
				
			}
		}
		return $data;
	}
	
	public static function getGroupForOptions() {
		$group_list = UserGroup::getAllGroup ();
		
		foreach ( $group_list as $group ) {
			$group_options_array [$group ['group_id']] = $group ['group_name'];
		}
		
		return $group_options_array;
	}
	
}