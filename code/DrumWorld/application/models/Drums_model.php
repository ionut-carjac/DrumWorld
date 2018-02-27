<?php
class Drums_model extends CI_Model {

	// Now you can access the methods using $this->mongo_db->

	public function __construct() {
		$this -> load -> library('ProductObject');
		$this -> load -> library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function getDrums() {
		$res = $this -> mongo_db -> get('drums');
		return $this -> toProductObject($res);

	}

	private function toProductObject($res) {
		$poArray = array();
		foreach ($res as $mongo_drum) {
			$po = new ProductObject();
			$po -> setType('drums');
			$po -> setId($mongo_drum['_id']);
			$po -> setName($mongo_drum['name']);
			
			array_push($poArray, $po);
		}
		return $poArray;

	}


}
