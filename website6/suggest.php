<?php 
	# 创建数组 (Todo) 数据本质上是在数据库中
	$people = [
		"邢鹏飞",
		"米南阳",
		"王明月",
		"连孟祥",
		"李春波",
		"魏宁宁",
		"王帆",
		"蒙长圆",
		"蒙芃憧"
	];

	$q = $_REQUEST['q'];
	$suggestion = "";

	if ($q !== '') {
		# $q = strtolower($q);
		$len = strlen($q);

		foreach ($people as $person) {
			if (stristr($q, substr($person,0,$len))) {
				if ($suggestion == "") {
					$suggestion = $person;
				}else {
					# $suggestion .= ",$person";
					$suggestion = $suggestion.",$person";
				}
			}
		}
	}	

	echo $suggestion === "" ? "No suggestion" : $suggestion;
?>

