<?php 
	
	session_start();

	$_SESSION['name'] = "Bucky";

	$name = $_SESSION['name'];

	$email = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page2 Session</title>
</head>
<body>
	<h5>Thank you <?php echo $name; ?></h5>
	<h5>Your Email is <?php echo $email; ?></h5>
	<a href="page3.php">Go to Page3!</a>
</body>
</html>