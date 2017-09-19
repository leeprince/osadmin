<?php
if(!defined('ACCESS')) {exit('Access denied.');}
class Area extends Base {
	// 表名
	private static $table_name = 'area';
	// 查询字段
	private static $columns = array('id', 'name');

	public static function getTableName(){
		return parent::$table_prefix.self::$table_name;
	}
	
	//列表 
	public static function getAllArea() {
		$db=self::__instance();
		$condition['ORDER'] = ['id' => 'ASC'];

		$list = $db->select (self::getTableName(), self::$columns, $condition);
		if ($list) {
			return $list;
		}
		return array ();
	}

	// 通过 id 获得区域信息
	public static function getAreaById($id) {
		if (! $id || ! is_numeric ( $id )) {
			return false;
		}

		$db=self::__instance();
		$condition['id'] = $id;
		$list = $db->select( self::getTableName(), self::$columns, $condition );

		if ($list) {
			return $list[0];
		}
		return array ();
	}

	// 通过 id 删除区域信息
	public static function delArea($id) {
		if ( ! $id || ! is_numeric($id) ) {
			return false;
		}

		$db = self::__instance();
		$condition['id'] = $id;
		$res = $db->delete(self::getTableName(), $condition);

		return $res;
	}

	// 获得该区域的站点信息
	public static function getAreaList($id) {
		if (! $id || ! is_numeric ( $id )) {
			return false;
		}

		$db=self::__instance();

		$sql = "select a.id, a.name, l.id as list_id, addr, l.description from " . self::getTableName() . " a,".AreaList::getTableName()." l where a.id = $id and a.id = l.area_id ORDER BY a.id ASC, l.id DESC";
		$list = $db->query($sql)->fetchAll();
		if ($list) {
			return $list;
		}
		return array ();
	}

	// 返回下拉列表
	public static function getAreaForOptions() {
		$area_list = self::getAllArea ();
		
		foreach ( $area_list as $area ) {
			$area_options_array[$area['id']] = $area['name'];
		}
		
		return $area_options_array;
	}

	// 通过id 更新区域信息
	public static function updateAreaById($id, $data) {
		if( ! $id || ! is_numeric($id) || ! is_array($data)) {
			return false;
		}

		$db = self::__instance();
		$condition['id'] = $id;
		$res = $db->update(self::getTableName(), $data, $condition);

		return $res;
	}

	// 通过name 获得区域信息
	public static function getAreaByName($name) {
		if ( $name == "" ) {
			return false;
		}
		$db=self::__instance();
		$condition['name'] = $name;
		$list = $db->select ( self::getTableName(), self::$columns, $condition);

		if ($list) {
			return $list[0];
		}
		return array ();
	}

	public static function addArea($data) {
		if( ! is_array($data) ) {
			return false;
		}
		$db=self::__instance();
		$id = $db->insert(self::getTableName(), $data);
		return $id;
	}

}
