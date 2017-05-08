<?php 
	// 单行注释
	#  单行注释
	/*
		多行
		注释
	*/
	
	# 变量 variables
	/*
		- 前缀"$"
		- 以字母或者下划线_开头
		- 由数字 / 字母 / 下划线组成
		- 驼峰命名法
		- 大小写敏感
	*/
	# $_output = "Hello World";


	# 数据类型
	/* 	
		String Boolean Integer Float
		NULL Object Array Resource
	*/
	$_output = "Hello World";
	$bool = true; 
	$number = 5;
	$float = 5.5;

	# 数据相加
	$num1 = 7;
	$num2 = 12;
	$sum = $num1 + $num2;

	# 字符串拼接
	$string1 = "Hello";
	$string2 = "World";
	$greeting = $string1.' '.$string2;

	# 单引号和双引号
	$greeting2 = '$string1 $string2';
	$greeting3 = "$string1 $string2";

	# 转义字符
	$greeting4 = 'Thye\'re Here';
	$greeting5 = "Thye're Here";

	# 常量
	define("GREETING", "Hello Everyone!",true);

	echo greEting;
	# print "Hello Everyone";
?>

