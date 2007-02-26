<?php
class DBMenu {
	protected $data = array();
	
	public function __construct() {
		$this->init($this->data, 0);
		//print_r($this->data);
	}	
	
	public function init(&$data, $parent_id) {
		$dbo = DB_DataObject::factory('categories');
		$dbo->parent_id = $parent_id;
		if ($dbo->find()) {
			while ($dbo->fetch()) {
				$this->init($data[$parent_id], $dbo->categories_id);
			}
		} else {
			$data[$parent_id] = $parent_id;
		}
	}
	
	public function getRootIds() {
		$root = $this->data[0];
		$ids = array();
		foreach($root as $id => $child) {
			$ids[] = $id;
		}
		return $ids;
	}
	
	public function hasChildren($id) {
		$result = false;
		$this->_hasChildren($id, $this->data, $result);
		return $result;
	}
	
	public function getChildrens($id) {
		$result = array();
		$this->_getChildrens($id, $this->data, $result);
		return $result;
	}
	
	public function _getChildrens($parentId, $data, &$result) {
		if ((count($result) == 0) && is_array($data)) {
			foreach ($data as $id => $child) {
				if (is_array($data[$id]) && $id == $parentId) {
					$result = $data[$id];
					break;
				}
				$this->_getChildrens($parentId, $data[$id], $result);
			}
		}
	}
	
	protected function _hasChildren($parentId, $data, &$result) {
		if (!$result && is_array($data)) {
			foreach ($data as $id => $child) {
				if (is_array($data[$id]) && $id == $parentId) {
					$result = true;
					break;
				}
				$this->_hasChildren($parentId, $data[$id], $result);
			}
		}
	}
}