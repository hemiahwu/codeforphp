<?php 
	
	# FUNCTION: 可被重复利用的代码块
	
	/*
		Camel  Case: myFunction
		Pascle Case: MyFunction
		lower  Case: my_function
	*/

	/*
	// 定义函数
	function simpleFunction(){
		echo "Hello World!";
	}

	// 调用函数
	simpleFunction();

	// 带参函数
	function sayHello($name='Henry'){
		echo "Hello $name";
	}

	sayHello('Bucky');
	sayHello('Brad');
	sayHello('Tom');
	

	# 返回值函数
	function addNumbers($num1,$num2){
		return $num1 + $num2;
	}

	echo addNumbers(2,3);
	*/

	# 函数传引用

	$myNum = 10;

	function addFive($num){
		$num += 5;
	}

	addFive($myNum);

	function addTen(&$num){
		$num += 10;
	}

	addTen($myNum);

	echo "Value: $myNum<br>";
	// localhost/phpsandbox/functions.php
?>