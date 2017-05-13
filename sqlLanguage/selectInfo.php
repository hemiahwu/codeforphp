<?php 
	
	function selectInfo($sql){
		$mysqli = new mysqli("localhost","root",'','userinfo');
		$mysqli->query("set names utf8");
		$result = $mysqli->query($sql);
		# var_dump($result);

		if ($result->num_rows) {
			
			# 第一种方法
			# $row = $result->fetch_row();
			# print_r($row);
			/*
			while ($row = $result->fetch_row()) {
				print_r($row);
			}
			*/

			# 第二种方法
			/*
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				print_r($row);	
			}
			*/

			# 第三种方法
			$row = $result->fetch_all(MYSQLI_ASSOC);
			# 将数组转为json数据
			echo json_encode($row);
		}
		$mysqli->close();
	}

	$sql = "SELECT * FROM users";

	selectInfo($sql);

	echo "<sript>window.location.href='http://www.baidu.com'</script>";

	# localhost/phpsandbox/sqlLanguage/selectInfo.php


?>