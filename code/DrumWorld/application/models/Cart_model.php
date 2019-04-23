<?php

class Cart_model extends CI_Model {
	public function __construct() {
		$this -> load -> library('ProductObject');
		$this -> load -> library('OrderObject');
		$this -> load -> library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function getOrderDetails() {
		$res = $this -> mongo_db -> get('order_details');
		return $this -> toOrderObjectList($res);

	}

	public function insertOrder($orderObjectArray) {
		return $this -> mongo_db -> insert("order_details", $orderObjectArray);
	}

	public function updateOrder($orderObjectArray) {
		$this -> mongo_db -> update("order_details", $orderObjectArray);

	}

	public function deleteOrder($id) {
		return $this -> mongo_db -> pull('order_details', array('_id' => new MongoID($id))) -> update('order_details');
	}

	private function toOrderObjectList($res) {
		$ooArray = array();
		foreach ($res as $mongo_order) {
			$oo = $this -> toOrderObject($mongo_order);

			array_push($ooArray, $oo);
		}
		return $ooArray;

	}

	private function toOrderObject($res) {
		$oo = new OrderObject();
		$oo -> setId($res['_id'] -> __toString());
		$oo -> setFirstName($res['first_name']);
		$oo -> setLastName($res['last_name']);
		$oo -> setEmail($res['email']);
		$oo -> setPhone($res['phone']);
		$oo -> setAddress($res['address']);
		$oo -> setOrderDate($res['order_date']);
		$oo -> setOrderTotalValue($res['order_total_value']);
		$oo -> setProducts($res['order_products']);

		return $po;
	}

}
?>
