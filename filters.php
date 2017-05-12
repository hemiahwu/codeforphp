<?php  
	# 检查是否有提交数据
	/*
	if (filter_has_var(INPUT_POST, 'data')) {
		$email = $_POST['data'];
		# echo $email;

		# 审核:将不合法的email符号去掉
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		echo $email."<hr>";

		# 验证:变量中的值是否是的email
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			echo "Email is valid";
		}else {
			echo "Email is NOT valid";
		}

		# 检查用户所输入的数据是否是email
		/*
		if (filter_input(INPUT_POST, 'data',FILTER_VALIDATE_EMAIL)) {
			echo $_POST['data'];
			echo "Email is valid";
		}else {
			echo "Email is NOT valid";
		}
		*/
	/*
	}else {
		echo "Data NOT Found!";
	} 
	*/


	/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW

		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/

	# 验证是否是数值
	/*
		$var = 'a23';

		if (filter_var($var,FILTER_VALIDATE_INT)) {
			echo "$var is a number";
		}else {
			echo "$var is NOT a number";
		}
	*/

	# 审核变量中所有的数值
	$var = "afsa786a8sdf6876f87asd8f6a8df";
	# echo filter_var($var,FILTER_SANITIZE_NUMBER_INT);

	# 将特殊字符干掉
	$var = "<script>alert(1)</script>";
	# echo $var;
	# echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);



	# filter_input_array
	/*
	$filters = array(
		"data" => FILTER_VALIDATE_EMAIL,
		"data2" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 100
			)
		)
	);

	print_r(filter_input_array(INPUT_POST,$filters));
	*/

	# filter_var_array
	$arr = array(
		"name" => "henry wu",
		"age" => "30",
		"email" => "27732357@qq.com"
	);


	$filters = array(
		"name" => array(
			"filter" => FILTER_CALLBACK,
			"options" => "ucwords"
		),

		"age" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 100
			)
		),
		"email" => FILTER_VALIDATE_EMAIL
	);

	print_r(filter_var_array($arr,$filters));

	# localhost/phpsandbox/filters.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FILTER_FUNCTION</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<input type="text" name="data">
		<input type="text" name="data2">
		<button type="submit">Submit</button>
	</form>
</body>
</html>