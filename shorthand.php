<?php 
	# shorthand: 语言结构中简写的方法

	$loggedIn = false;
	/*
	if ($loggedIn) {
		echo "U r logged in";
	}else{
		echo "U r NOT logged in";
	}
	*/

	# 三目运算符 ? : 表达式
	# echo ($loggedIn) ? "U r logged in" : "U r NOT logged in";

	$isRegistered = ($loggedIn === true) ? true : false;

	# echo $isRegistered;

	# 三目嵌套
	/*
	$age = 7;
	$score = 12;

	echo "你的分数是:".
	($score < 10 ? ($age < 10 ? '中等成绩1' : "优等成绩") :
		($age > 10 ? '差等成绩' : '中等成绩2')
	);
	*/

	$arr = [1,2,3,4,5];
?>

<!-- hmtl & php 混编 -->
<div>
	<?php if ($loggedIn) { ?>
		<h1>Welcome to Lanou!</h1>
	<?php } else { ?>
		<h1>Goodbye boy!</h1>
	<?php } ?>
</div>

<!-- 更优 更美观的写法 -->
<div>
	<?php if($loggedIn): ?>
		<h1>Welcome User!</h1>
	<?php else: ?>
		<h1>Welcome Guest!</h1>
	<?php endif; ?>
</div>

<!-- 遍历数组 -->
<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>

<!-- for循环遍历 -->
<ul>
	<?php for ($i=0; $i < count($arr); $i++):?>
			<li><?php echo $arr[$i] ?></li>
	<?php endfor; ?>
</ul>





















