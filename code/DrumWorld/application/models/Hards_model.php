<?php
class Hards_model extends CI_Model {

	// Now you can access the methods using $this->mongo_db->

	public function __construct() {
		$this -> load -> library('ProductObject');
		$this -> load -> library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function getHards() {
		$res = $this -> mongo_db -> get('hardware');
		return $this -> toProductObject($res);

	}

	private function toProductObject($res) {
		$poArray = array();
		foreach ($res as $mongo_hard) {
			$po = new ProductObject();
			$po -> setType('hards'); 
			$po -> setId($mongo_hard['_id']);
			$po -> setName($mongo_hard['name']);
			$po -> setDescription($mongo_hard['description']);
			$po -> setPrice($mongo_hard['price']);
			$po -> setProducer($mongo_hard['producer']);
			$po -> setStock($mongo_hard['stock']);
			$po -> setSales($mongo_hard['sales']);

			array_push($poArray, $po);
		}
		return $poArray;

	}

}
