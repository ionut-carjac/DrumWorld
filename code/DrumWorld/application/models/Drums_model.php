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

	// public function get_news($slug = FALSE) {
	// if ($slug === FALSE) {
	// $query = $this -> db -> get('news');
	// return $query -> result_array();
	// }
	//
	// $query = $this -> db -> get_where('news', array('slug' => $slug));
	// return $query -> row_array();
	// }
	//
	// public function set_news() {
	// $this -> load -> helper('url');
	//
	// $slug = url_title($this -> input -> post('title'), 'dash', TRUE);
	//
	// $data = array('title' => $this -> input -> post('title'), 'slug' => $slug, 'text' => $this -> input -> post('text'));
	//
	// return $this -> db -> insert('news', $data);
	// }

}
