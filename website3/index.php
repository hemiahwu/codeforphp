<?php 
	
	$msg = "";
	$msgClass = "";

	# 测试submit是否可用
	if (filter_has_var(INPUT_POST, 'submit')) {
		# echo "hello world!";
		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);
		$message = htmlentities($_POST['message']);

		if (!empty($name) && !empty($email) && !empty($message)) {
			# 提交成功

			# 验证Email
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				# 验证不成功
				$msg = "你的邮箱格式不正确!";
				$msgClass = "alert-danger";
			}else {
				# 验证成功
				$toEmail = "27732357@qq.com";
				$subject = "邮件来自于: ".$name;
				$body = "<h2>邮件信息</h2><h4>Name</h4><p>".$name."</p><h4>Email</h4><p>".$email."</p><h4>Message</h4><p>".$message."</p>";


				if (mail($toEmail, $subject, $body)) {
					$msg = "邮件发送成功!";
					$msgClass = "alert-success";
				}else {
					# Failed
					$msg = "邮件发送失败!";
					$msgClass = "alert-danger";
				}
			}


		}else {
			# 提交失败,并提示用户
			$msg = "你的内容不能为空!";
			$msgClass = "alert-danger";
		}

	}
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="nav-header">
			<a href="index.php" class="navbar-brand">My Website</a>
		</div>
	</div>
</nav>

<div class="container">
	<!-- 提示用户 -->
	<?php if($msg != ''): ?>
	<div class="alert <?php echo $msgClass?>"><?php echo $msg;?></div>
	<?php endif; ?>


	<form method="POST" action="index.php">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo isset($name) ? $name : '';?>">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo isset($email) ? $email : '';?>">
		</div>

		<div class="form-group">
			<label>Message</label>
			<textarea name="message" class="form-control"><?php echo isset($message) ? $message : '';?></textarea>
		</div>

		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

	
</body>
</html>

<!-- localhost/phpsandbox/website3/index.php -->