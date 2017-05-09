<?php 

	# 创建一个数组
	$array = array();

	# 使用数组方法,将内容添加到上面的数组中
	array_push($array, "Hello");
	# echo $array[0];

	# 创建一个无序数组,使用数组方法,让数组排序
	$array = array(22,15,13,26,29);
	sort($array);
	foreach ($array as $value) {
		echo "$value<br>";
	}
	# print_r($array);

	# 创建一个关联数组,让关联数组排序(倒序)
	$array = array(
		"Henry"=>22,
		"Bucky"=>22,
		"Emily"=>22,
		"Elyse"=>22
	);

	ksort($array);
	# print_r($array);

	# 创建一个数组,将数组转为字符串
	$array = array("Hello","World");
	$string = implode(",", $array);
	# echo $string;


	# 创建一个字符串,将字符串转为数组
	$string = "hello world";
	$array = explode(' ',$string);
	echo $array[0];

	# localhost/phpsandbox/array_functions.php

?>