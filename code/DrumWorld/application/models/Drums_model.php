<?php
class Drums_model extends CI_Model {

	// Now you can access the methods using $this->mongo_db->

	public function __construct() {
		$this -> load -> library('ProductObject');
		$this -> load -> library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function getDrums() {
		$res = $this -> mongo_db -> get('drums');
		return $this -> toProductObjectList($res);

	}

	public function getDrumById($id) {
		$res = $this -> mongo_db -> get_where('drums', array('_id' => new MongoId($id)));
		foreach ($res as $mongo_drum) {
			$po = $this -> toProductObject($mongo_drum);	
			return $po;
		}
		
		
	}

	public function countDrums() {
		return $this -> mongo_db -> count("drums");
	}

	private function toProductObjectList($res) {
		$poArray = array();
		foreach ($res as $mongo_drum) {
			$po = $this -> toProductObject($mongo_drum);

			array_push($poArray, $po);
		}
		return $poArray;

	}

	private function toProductObject($res) {
		$po = new ProductObject();
		$po -> setType('drums');
		$po -> setId($res['_id'] -> __toString());
		$po -> setPicName($res['pic_name']);
		$po -> setName($res['name']);
		$po -> setDescription($res['description']);
		$po -> setPrice($res['price']);
		$po -> setProducer($res['producer']);
		$po -> setStock($res['stock']);
		$po -> setSales($res['sales']);

		return $po;
	}

}
