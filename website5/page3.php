<?php 
	
	# Cookie中存储多个值
	$user = ["name" => "henry","email" => "henry@gmail.com","age" => "30"];
	# 将数组转为字节流
	$user = serialize($user);

	setcookie("user",$user,time() + 3600);

	# 将字节流转为数组
	$user = unserialize($user);
	# echo $user["name"];
	print_r($user);
 ?>