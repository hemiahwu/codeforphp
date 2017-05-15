<?php 
	
	$conn = new mysqli("localhost","root","","userinfo");

	if ($conn->connect_errno) {
		die("Failed to connect MYSQL ".$conn->connect_errno);
	}
	$conn->query("set names utf8");
	$query = "SELECT * FROM users";

	$result = $conn->query($query);

	if ($result->num_rows) {
		$data = $result->fetch_all(MYSQLI_ASSOC);

		echo json_encode($data);
	}

	$conn->close();

	# localhost/ajax_sandbox/website1/php/selectInfo.php


 ?>