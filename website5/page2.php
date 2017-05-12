<?php  
	# 修改Cookie的值
	setcookie("username","Bucky",time() + 86400 * 30);

	# 注销Cookie
	# setcookie("username"," ",time() - 3600);

	# 拿到Cookie的个数
	if (count($_COOKIE['username'] > 0)) {
		echo "There are ".count($_COOKIE['username']).' value';
	}else{
		echo "没有任何的Cookie值";
	}

	if (isset($_COOKIE['username'])) {
		echo "User ".$_COOKIE['username']." is set";
	}else {
		echo "User ".$_COOKIE['username']." is NOT set";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="page3.php">Go to page3</a>
</body>
</html>


