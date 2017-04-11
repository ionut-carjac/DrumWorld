<?php
	class Cymbal{
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
			return $this->$name;
		}
		public function setName($name){
			$this->name = $name;
		}
	}
?>