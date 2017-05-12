<?php 
	# Cookie: 用于存储数据,存储的位置是本地浏览器中
	if (isset($_POST['submit'])) {
		$username = htmlentities($_POST['username']);

		# 存储数据
		setcookie("username",$username,time() + 3600);

		header('Location: page2.php');
	}

	# localhost/phpsandbox/website5/page1.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="username" placeholder="Enter Username">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>