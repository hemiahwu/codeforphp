<?php 
	
	# 条件 分支 - if  - switch
	
	# 关系运算符 
	/*
		== === != !== > < >= <=
	*/
	/*
	$num = 4;

	if ($num != '4')
		echo "$num 确实不等等于 4";
	else if ($num > 4)
		echo "$num 确实大于/等于 4";
	else 
		echo "WTF!";
	*/

	# Nesting If 嵌套
	/*
	$num = 6;
	if ($num > 4) {
		if ($num < 10) {
			echo "$num 大于4,并且小于10";
		}
	}else{
		echo "whatever!";
	}
	*/

	# 逻辑运算符 Logic
	/*
		AND &&   左右两边都为真,才为真
		OR  ||   左右两边一个为真,即为真
		XOR 	 左右两边只能有一个为真,才为真
	*/
	
	/*
	$num = 3;
	if ($num > 4 XOR $num > 10) {
		echo "$num 大于4,并且小于10";
	}
	*/

	/*
	$x = 2;
	$y = 5;
	$z = 1;

	$result = $z && $x || $y;
	echo $result;
	*/

	# switch 

	$favColor = 5;

	switch ($favColor) {
		case '5':  
			echo "你最喜欢的颜色是$favColor";
			break;
		case '4':
			echo "你最喜欢的颜色是$favColor";
			break;
		case '3':
			echo "你最喜欢的颜色是$favColor";
			break;
		case '2':
			echo "你最喜欢的颜色是$favColor";
			break;
		
		default:
			echo "没有你喜欢的颜色";
			break;
	}
?>