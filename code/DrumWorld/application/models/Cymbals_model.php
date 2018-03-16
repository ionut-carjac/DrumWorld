<?php
class Cymbals_model extends CI_Model {

	// Now you can access the methods using $this->mongo_db->

	public function __construct() {
		$this -> load -> library('ProductObject');
		$this -> load -> library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function getCymbals() {
		$res = $this -> mongo_db -> get('cymbals');
		return $this -> toProductObject($res);

	}

	private function toProductObject($res) {
		$poArray = array();
		foreach ($res as $mongo_cymbal) {
			$po = new ProductObject();
			$po -> setType('cymbals');
			$po -> setId($mongo_cymbal['_id']->__toString());
			$po -> setName($mongo_cymbal['name']);
			$po -> setDescription($mongo_cymbal['description']);
			$po -> setPrice($mongo_cymbal['price']);
			$po -> setProducer($mongo_cymbal['producer']);
			$po -> setStock($mongo_cymbal['stock']);
			$po -> setSales($mongo_cymbal['sales']);

			array_push($poArray, $po);
		}
		return $poArray;

	}

}
