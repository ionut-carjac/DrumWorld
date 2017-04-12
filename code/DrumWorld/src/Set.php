<?php
	class Set{
		private $id;
		private $name;
		private $description;
		private $price;
		private $producer;
		private $stock;
		private $sales;
		
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		
		public function getDescription(){
			return $this->description;
		}
		public function setDescription($description){
			$this->description = $description; 
		}
		
		public function getPrice(){
			return $this->price;
		}
		public function setPrice($price){
			$this->price = $price;
		}
		
		public function getProducer(){
			return $this->producer;
		}
		public function setProducer($producer){
			$this->produer = $producer;
		}
		
		public function getStock(){
			return $this->stock;
		}
		public function setStock($stock){
			$this->stock = $stock;
		}
		
		public function getSales(){
			return $this->sales;
		}
		public function setSales(){
			$this->sales = $sales;
		}
		
	}
?>