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

	public function countDrums() {
		return $this -> mongo_db -> count("drums");
	}

	private function toProductObject($res) {
		$poArray = array();
		foreach ($res as $mongo_drum) {
			$po = new ProductObject();
			$po -> setType('drums');
			$po -> setId($mongo_drum['_id']);
			$po -> setPicName($mongo_drum['pic_name']);
			$po -> setName($mongo_drum['name']);
			$po -> setDescription($mongo_drum['description']);
			$po -> setPrice($mongo_drum['price']);
			$po -> setProducer($mongo_drum['producer']);
			$po -> setStock($mongo_drum['stock']);
			$po -> setSales($mongo_drum['sales']);

			array_push($poArray, $po);
		}
		return $poArray;

	}

}
