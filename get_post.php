<?php
	
	/*
	拿到用户提交的用户名和密码,判断用户名是否跟数组中的名字同名,如果有,那么返回给用户"用户名已经存在",如果用户名在数组中没有,那么将用户名插入到数组中,接下来判断两次用户输入的密码是否正确,如果正确,那么给用户返回,注册成功,否则返回两次密码不同.  
	*/
	
	# 判断当前的name属性是否存在,如果有那么执行
	/*
		if (isset($_GET["name"])) {
			$name = $_GET['name'];
			# echo $name;

			print_r($_GET);
		}
	

		if (isset($_POST["name"])) {
			# htmlentities将字符转换为html标签
			$name = htmlentities($_POST["name"]);
			# echo $name;
			# print_r($_POST);
		}
	*/

	# 不管你是GET / POST都可以拿到数据
	if (isset($_REQUEST["name"])) {
		$name = htmlentities($_REQUEST["name"]);
		# echo $name;
		# print_r($_REQUEST);
	}

	# 拿到所有参数及参数值
	echo $_SERVER["QUERY_STRING"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Website</title>
</head>
<body>
	<form action="get_post.php" method="POST">
		<div>
			<label>Name</label> <br>
			<input type="text" name="name">
		</div>

		<div>
			<label>Email</label> <br>
			<input type="text" name="email">
		</div>

		<input type="submit" value="Submit">
	</form>
</body>
</html>

