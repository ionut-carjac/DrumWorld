<?php

class Connection {
	public function getMongoDrumsDB() {
		$connection = new MongoClient();
		$db = $connection -> drums;
		return $db;
	}

	public function getCollection($db, $collName) {
		$collection = $db -> $collName;
		return $collection;
	}

}
?>
