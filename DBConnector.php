<?php 
function connect(){
	$dbHost = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "btc3205";

	
	$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
	if ($db->connect_error) {
		# code...
		die("Connection failed: ".$db->connect_error);
	}else{
		// echo "success";
	}
	return $db;
}
 ?>