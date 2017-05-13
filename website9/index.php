<?php 
	# 引入文件
	require_once('config/config.php');
	require('config/db.php');

	# 获取数据库中的内容
	$query = "SELECT * FROM posts";

	# 执行sql语句
	$result = mysqli_query($conn,$query);

	# 与数据库进行匹配
	$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
	# var_dump($posts);

	mysqli_free_result($result);

	# 关闭数据库
	mysqli_close($conn);
?>

<?php require('inc/header.php') ?>
		<h1>PHP Blog</h1>
		<!-- 循环变量数据库中所有的内容 -->
		<?php foreach ($posts as $post): ?>
			<!-- 容器承载内容 -->
			<div class="well">
				<!-- 拿到内容的title值 -->
				<h3><?php echo $post['title']; ?></h3>
				<small>
					<!-- 拿到内容的时间 -->
					时间: <?php echo $post['created_at'] ?>
					<!-- 拿到内容的作者 -->
					作者: <?php echo $post['author'] ?> 
				</small>
				<!-- 拿到所有的内容 -->
				<p><?php echo $post['body'] ?></p>
				
				<!-- 设置查看详细按钮 -->
				<a class="btn btn-default" 
					href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id']?>">
				查看详细</a>
			</div>
		<?php endforeach; ?>
<?php require('inc/footer.php') ?>












