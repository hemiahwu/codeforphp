<?php 
	# string functin: 处理字符串的函数
	# 返回字符串的一部分
	$output = substr("Hello", 1, 3);
	$output = substr("Hello", -2);
	# echo $output;

	# 返回给定的字符串 string 的长度。
	$output = strlen("Hello World");
	# echo $output;

	# 查找字符串首次出现的位置
	$output = strpos("Hello World", 'o');
	# echo $output;

	# 计算指定字符串在目标字符串中最后一次出现的位置
	$output = strrpos("Hello World", 'o');
	# echo $output;

	# 去除首尾空格
	$text = "Hello World             ";
	# var_dump($text);
	$trimed = trim($text);
	# var_dump($trimed);

	# 将字符串转为大写
	$output = strtoupper("Hello World\n");
	# echo $output;

	# 将字符串转为小写
	$output = strtolower("HELLO WORLD\n");
	# echo $output;

	# 将每个单词首字母大写
	$output = ucwords("upper case words");
	# echo $output;

	# 替换所有匹配的内容
	$text = "Hello World";
	$output = str_replace("World", "Everybody", $text);
	# echo $output;

	# 判断是否是字符串
	$num = 10;

	$val = "$num";
	$output = is_string($val);
	# echo $output;

	# 过滤掉数组中非字符串的值
	/*
		$values = array(true,false,null,
			'abc',33,'33',22.4,'22.4','',' ',0,'0');

		$values2 = [];

		foreach ($values as $value) {
			// 判断是不是字符串
			if (is_string($value)) {
				array_push($values2, $value);
			}
		}

		var_dump($values2);
	*/

	# 压缩字符串
	$string = "The farthest distance in the world
　　Is not the distance between life and death
　　But you don't know I love you when I stand in front of you";

	$compressed = gzcompress($string);
	echo $compressed;

	$original = gzuncompress($compressed);
	echo "<hr>$original";










	# localhost/phpsandbox/string_functions.php
?>