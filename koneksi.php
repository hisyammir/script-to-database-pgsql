<?php
	try {
		$dbuser = 'postgres';
		$dbpass = 'postgres';
		$host = 'localhost';
		$dbname = 'hidroponik';
		$PDO = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $dbuser, $dbpass);
		// echo "Terhubung gaes";
	} catch (PDOException $erro) {
		echo "Gagal Terhubung ke database : " . $erro->getMessage();
	}

?>

