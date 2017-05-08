<?php  
	
	# 循环: 根据某种条件,重复执行某段代码!
	
	/*
		- For
		- While
		- Do...While
		- Foreach
	*/

	# For
	# @params -init,conditions,inc
	/*
	for ($i = 5; $i < 10; $i++) { 
		echo "$i<br>";
	}
	*/

	# While
	# @params -condition
	/*
	$i = 0;
	while ($i < 10) {
		echo "$i<br>";
		$i++;
	}
	*/

	# 问: 什么时候用for 什么使用用while

	# Do...While
	# @params -condition
	/*
	$i = 0;
	do{
		echo "$i<br>";
		$i++;
	}
	while ($i <= 10); 
	*/

	# Foreach 下标数组
	/*
	$people = ["Henry","Bucky","Emily"];

	foreach ($people as $person) {
		echo "$person<br>";
	}
	*/

	# Foreach 关联数组
	$people = [
		"Henry" => "herny@gmail.com",
		"Bucky" => "bucky@gmail.com",
		"Emily" => "emily@gmail.com"
	];

	foreach ($people as $person => $email) {
		echo "$person : $email<br>";
	}


	# 打印1~100之间的7的倍数

	# 打印1~100之间个位为7的数

	# 打印1~100之间十位为7的数




	# localhost/phpsandbox/loops.php

?>