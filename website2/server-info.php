<?php 
	
	# 创建服务器端数组信息
	$server = [
		"Host Server Name" => $_SERVER['SERVER_NAME'],
		"Server Software" => $_SERVER['SERVER_SOFTWARE'],
		"Document Root" => $_SERVER['DOCUMENT_ROOT'],
		"Host Name" => $_SERVER["HTTP_HOST"],
		"Script Name" => $_SERVER['SCRIPT_NAME'],
		"Absolute Path" => $_SERVER["SCRIPT_FILENAME"],
		"Current Page" => $_SERVER["PHP_SELF"]
	];	

	# echo $server["Current Page"];

	# print_r($server);

	# 客户端数组信息
	$client = [
		"Client System Info" => $_SERVER["HTTP_USER_AGENT"],
		"Client IP" => $_SERVER["REMOTE_ADDR"],
		"Remote Port" => $_SERVER['REMOTE_PORT']
	];

	# echo $client["Remote Port"];


	# localhost/phpsandbox/website2/server-info.php
?>