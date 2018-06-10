<?php

class OrderObject {
	private $id;
	private $firstName;
	private $lastName;
	private $email;
	private $phone;
	private $address;
	private $orderDate;
	private $orderTotalValue;
	private $products = array();

	public function getId() {
		return $this -> id;
	}

	public function setId($id) {
		$this -> id = $id;
	}

	public function getFirstName() {
		return $this -> firstName;
	}

	public function setFirstName($firstName) {
		$this -> firstName = $firstName;
	}

	public function getLastName() {
		return $this -> lastName;
	}

	public function setLastName($lastName) {
		$this -> lastName = $lastName;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function setEmail($email) {
		$this -> firstName = $email;
	}

	public function getPhone() {
		return $this -> phone;
	}

	public function setPhone($phone) {
		$this -> phone = $phone;
	}

	public function getAddress() {
		return $this -> address;
	}

	public function setAddress($address) {
		$this -> address = $address;
	}

	public function getOrderDate() {
		return $this -> orderDate;
	}

	public function setOrderDate($orderDate) {
		$this -> orderDate = $orderDate;
	}

	public function getOrderTotalValue() {
		return $this -> orderTotalValue;
	}

	public function setOrderTotalValue($orderTotalValue) {
		$this -> orderTotalValue = $orderTotalValue;
	}

	public function getProducts() {
		return $this -> products;
	}

	public function setProducts($products) {
		$this -> products = $products;
	}

}
?>