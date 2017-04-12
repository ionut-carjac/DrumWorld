<?php

class Connection {
	public function getMongoDrumsDB() {
		$connection = new MongoClient();
		$db = $connection->drums;
		return $db;
	}

	public function getCollection($db, $collName) {
		$collection = $db -> $collName;
		return $collection;
	}

}

$con = new Connection();
$con1 = $con -> getConnection();
$db = $con -> getDatabase($con1);
$cymbals_collection = $con -> getCollection($db, "cymbals") -> find();

echo"<table>";
	echo"<tr>";
		echo"<td>Name</td>";
		echo"<td>Price</td>";
	echo"</tr>";
	foreach ($cymbals_collection as $row) {
		echo"<tr>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['price']."</td>";
		echo"</tr>";
	
}
echo"</table>";
?>
