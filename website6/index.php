<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">
	
	<script>
		function showSuggestion(str) {
			// console.log(str);
			if (str.length == 0) {
				document.getElementById('output').innerHTML = '';
			}else {
				// AJAX
				// 创建xmlhttp对象
				var xmlHttp = new XMLHttpRequest();

				// 监听对象状态
				xmlHttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {

						document.getElementById('output').innerHTML = this.responseText;
					}
				}

				// 配置xmlhttp对象
				xmlHttp.open("GET","suggest.php?q=" + str,true);

				// 发送请求
				xmlHttp.send();
			}
			// console.log(str);
		}
	</script>


</head>
<body>
	<div class="container">
		<h1>Search Users</h1>

		<form>
			<input class="form-control" type="text" onkeyup="showSuggestion(this.value)">
		</form>
		<p>Suggetions: <span id="output" style="font-weight: bold;"></span></p>
	</div>
</body>
</html>

<!-- localhost/phpsandbox/website6/index.php -->