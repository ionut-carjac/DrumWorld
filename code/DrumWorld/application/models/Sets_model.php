<?php
class Sets_model extends CI_Model {

	// Now you can access the methods using $this->mongo_db->

	public function __construct() {
		$this -> load -> library('ProductObject');
		$this -> load -> library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function getSets() {
		$res = $this -> mongo_db -> get('sets');
		return $this -> toProductObject($res);

	}

	private function toProductObject($res) {
		$poArray = array();
		foreach ($res as $mongo_set) {
			$po = new ProductObject();
			$po -> setType('sets');
			$po -> setId($mongo_set['_id']);
			$po -> setName($mongo_set['name']);
			
			array_push($poArray, $po);
		}
		return $poArray;

	}



}
