<?php 
	
	$name = htmlentities($_POST["name"]);
	$age = htmlentities($_POST["age"]);

	$conn = new mysqli("localhost","root","","userinfo");

	if ($conn->connect_errno) {
		die("Failed to connect MYSQL ".$conn->connect_errno);
	}
	$conn->query("set names utf8");
	$query = "INSERT INTO users(name,age) VALUES('$name','$age')";

	$result = $conn->query($query);

	if ($result) {
		echo "插入成功!";
	}else{
		echo "插入失败!";
	}

	$conn->close();

?>