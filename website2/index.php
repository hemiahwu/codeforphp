<?php include("server-info.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统信息</title>
	<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>服务端 & 配置信息</h1>
		<?php if ($server): ?>
			<ul class="list-group">
				<?php foreach ($server as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key;?>:</strong>
						<?php echo $value;?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<!-- 客户端 -->
		<h1>客户端 & 配置信息</h1>
		<?php if ($client): ?>
		<ul class="list-group">
			<?php foreach($client as $key => $value): ?>
			<li class="list-group-item">
				<strong><?php echo $key; ?>:</strong>
				<?php echo $value; ?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
</body>
</html>