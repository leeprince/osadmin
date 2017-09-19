<?php
if(!defined('ACCESS')) {exit('Access denied.');}
class AreaList extends Base {
	// 表名
	private static $table_name = 'area_list';
	// 查询字段
	private static $columns = array('id', 'area_id', 'addr', 'description');

	public static function getTableName(){
		return parent::$table_prefix.self::$table_name;
	}

	// 通过 区域 id 获得区域内站点列表信息
	public static function getSiteByArea($area_id) {
		$condition['area_id'] = $area_id;
		$db   = self::__instance();
		$list = $db->select(self::getTableName(), self::$columns, $condition);
		if ($list) {
			return $list;
		}
		return array ();

	}

	// 获得所有站点信息
	public static function getAllSite($start = '', $page_size = '') {
		$limit     = '';
		$condition = array();
		if ($page_size) {
			$condition['LIMIT'] = [$start, $page_size];
		}
		$condition['ORDER'] = ['id' => 'DESC'];

		$db   = self::__instance();
		$list = $db->select(self::getTableName(), self::$columns, $condition);
		if ($list) {
			return $list;
		}
		return array ();

	}

	// 获得所有站点信息
	public static function search($area_id, $addr, $start = '', $page_size = '') {
		$limit     = '';
		$condition = array();

		if ( $area_id > 0  && $addr != "" ) {

			$condition['area_id'] = $area_id;
			$condition['LIKE'] = ["addr"=>$addr];
		}else{

			if ($area_id > 0) {
				$condition['area_id'] = $area_id;
			}
			if ($addr != "") {
				$condition['LIKE'] = ["addr"=>$addr];
			}
		}

		if ($page_size) {
			$condition['LIMIT'] = [$start, $page_size];
		}
		$condition['ORDER'] = ['id' => 'DESC'];

		$db   = self::__instance();
		$list = $db->select(self::getTableName(), self::$columns, $condition);
		if ($list) {
			return $list;
		}
		return array ();

	}

	// 删除站点
	public static function delSite($id) {
		if( ! $id || ! is_numeric($id) ) {
			return false;
		}

		$condition = array();
		$condition['id'] = $id; 
		$db = self::__instance();
		$res = $db->delete(self::getTableName(), $condition);

		return $res;
	}

	// 批量更新
	public static function batchUpdateSite($data, $condition) {
		if ( ! is_array($data) || ! is_array($condition) ) {
			return false;
		}
		$db=self::__instance();

		$res = $db->update(self::getTableName(), $data, $condition);
		return $res;
	}

	// 通过 站点 id 获得区域内站点列表信息
	public static function getSiteById($id) {
		if ( ! $id || ! is_numeric($id) ) {
			return false;
		}
		$db=self::__instance();
		$condition['id'] = $id;
		$res = $db->select(self::getTableName(), self::$columns, $condition);

		if ($res) {
			return $res[0];
		}
		return array();
	}

	// 通过 addr 获得站点信息
	public static function getSiteByName($addr) {
		if( $addr == '' ) {
			return false;
		}

		$condition = array();

		$condition['addr'] = $addr;

		$db = self::__instance();
		$res = $db->select(self::getTableName(), self::$columns, $condition);

		if ($res) {
			return $res[0];
		}
		return array();
	}

	// 站点记录总数
	public static function count($condition = '') {
		$db  = self::__instance();
		$num = $db->count ( self::getTableName(), $condition );
		return $num;
	}

	// 检索结果总数
	public static function countSearch($area_id, $addr) {
		$db=self::__instance();
		$condition = array();
		if ( $area_id >0  && $addr!="" ) {
			$condition['area_id'] = $area_id;
			$condition['LIKE'] = array("addr"=>$addr);
		}else{
			if ($area_id>0){
				$condition['area_id'] = $area_id;
			}
			if ($addr!=""){
				$condition['LIKE'] = array("addr"=>$addr);
			}
		}
		$num = $db->count( self::getTableName(), $condition);
		return $num;
	}

	// 通过 id 更新站点信息
	public static function updateSiteById($id, $data) {
		if( ! $id || ! is_numeric($id) || ! is_array($data) ) {
			return false;
		}

		$condition = array();

		$condition['id'] = $id;

		$db = self::__instance();
		$res = $db->update(self::getTableName(), $data, $condition);

		return $res;
	}

	// 通过 id 更新站点信息
	public static function addSite($data) {
		if( ! is_array($data) ) {
			return false;
		}

		$db = self::__instance();
		$id = $db->insert(self::getTableName(), $data);

		return $id;
	}

}
