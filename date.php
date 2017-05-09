<?php 
	# 至少要有一个参数
	# echo date();

	echo date('d');  // day
	echo date('m');  // month
	echo date('Y');  // year
	echo date('l');  // day of week

	echo date('Y/m/d');  // 格式化输出年月日
	echo date('m-d-Y');  // 格式化输出年月日

	echo "<hr>";

	echo date('h');  // hour
	echo date('i');  // minute
	echo date('s');  // seconds
	echo date('a');  // am or pm

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	# date_default_timezone_set("Etc/GMT-8");
	echo "<hr>";
	echo date("h:i:sa");

	# 时间戳
	$timestamp = mktime(07,00,12,1,24,1988);
	echo "<hr>";
	# echo $timestamp;

	# echo date('m/d/Y h:i:sa',$timestamp);

	# 字符串转时间
	$timestamp2 = strtotime("3:20pm March 24 2017");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next Sunday");
	$timestamp5 = strtotime("+2 Days");
	# echo $timestamp2;

	echo date('m/d/Y h:i:sa',$timestamp5);



	#localhost/phpsandbox/date.php

?>