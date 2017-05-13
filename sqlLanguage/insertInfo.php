<?php 
	
	# 操作数据库
	/*
		1.连接数据库
		2.执行sql语句
		3.使用结果
		4.断开连接
	 */

	# 链接数据库

	# 创建mysqli对象并连接数据库
	# $mysqli = new mysqli("localhost","root",'','userinfo');

	# 判断数据库是否连接成功
	/*
	if ($mysqli->connect_errno) {
		# 非0即为数据库连接失败
		die($mysqli->connect_errno);
	}
	*/
	# 编写sql语句
	# $sql = "INSERT INTO users(name,age,sex,weight) VALUES('Lily',25,'女','55')";

	# $mysqli->query("set names utf8");

	# 执行sql语句
	# $result = $mysqli->query($sql);

	# 判断语句插入是否成功
	/*
	if ($result) {
		echo "插入成功!";
	}else{
		echo "插入失败!";
	}
	*/

	# 断开数据库连接
	# $mysqli->close();


	# localhost/phpsandbox/sqlLanguage/insertInfo.php

	function insertInfo($sql){
		$mysqli = new mysqli("localhost","root",'','userinfo');
		$mysqli->query("set names utf8");
		$result = $mysqli->query($sql);
		$mysqli->close();
	}

	$sql = "INSERT INTO users(name,age,sex,weight) VALUES('Lily',26,'女','55')";

	insertInfo($sql);

	# 登录 注册

	






 ?>