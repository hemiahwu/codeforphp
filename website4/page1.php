<?php 
	
	# Session: 用于存储数据,并且存储的位置是服务端
	
	if (isset($_POST['submit'])) {
		# echo 123;

		# 使用session存储之前,必须要启动会话
		session_start();

		$_SESSION["name"] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];

		# echo $_SESSION['name'];

		# 跳转到page2.php页面
		header('Location: page2.php');
	}


	# localhost/phpsandbox/website4/page1.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP SESSION</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="Enter Name">
		<input type="text" name="email" placeholder="Enter Email">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>