<?php 
	// 单行注释
	#  单行注释
	/*
	   多行
	   注释
	*/

	# 变量
	/*
		- 使用$修饰变量
		- 由字符或下划线开头
		- 由字符/数字/下划线组成
		- 大小写敏感
		- 驼峰命名法
	*/

	# 数据类型
	/*
		- String
		- Integer
		- Float
		- Boolean
		===============
		- Array 
		- Object
		- Null
		- Resource
	*/
	$_output = 'Hello World!';
	$number = 4;
	$float = 4.4;
	$bool = true;

	# 数值相加
	$num1 = 7;
	$num2 = 12;
	$sum = $num1 + $num2;

	# 字符串拼接
	$str1 = 'Hello';
	$str2 = 'World';
	# $greeting = $str1 + $str2;
	# $greeting = $str1 .' '. $str2;
	# 双引和单引的区别
	$greeting = '$str1 $str2';


	# 转移字符
	# $str3 = 'They\'re here';
	$str3 = "They're here";

	# 常量
	define('GREETING','Hello WoRlD!',true);

	echo greeting;
?>













