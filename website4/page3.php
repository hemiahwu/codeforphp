<?php 
	session_start();

	print_r($_SESSION);

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : "No Subscribed!";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page3 Session</title>
</head>
<body>
	<h4>Hello <?php echo $name; ?></h4>
</body>
</html>