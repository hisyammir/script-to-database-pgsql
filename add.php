<?php
	
	include('koneksi.php');
	
	// $id = $_GET['id_pengaliran'];
	$sensor = $_GET['ppm'];
	$sensor2 = $_GET['ppm2'];

	$sql        =   "SELECT * FROM pengaliran WHERE status= 1 LIMIT 1";
	$stmt = $PDO->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	$id_pengaliran = $result['id_pengaliran'];
	$sensor = $_GET['ppm'];
	$sensor2 = $_GET['ppm2'];

	$sql = "INSERT INTO pembacaan_sensor(id_pengaliran, ppm1,ppm2) VALUES (:id_pengaliran, :ppm, :ppm2)";
	$stmt = $PDO->prepare($sql);
	
	// pass values to the statement
	$stmt->bindParam(':id_pengaliran', $id_pengaliran);
	$stmt->bindParam(':ppm', $sensor);
	$stmt->bindParam(':ppm2', $sensor2);
	// execute the insert statement
	$stmt->execute();

	if($stmt->execute()) {
		// echo "sukses gaes";
		echo $result['min_ppm'];
	}else{
		echo "gagal gaes";
		print_r($stmt->errorInfo());
	}
?>