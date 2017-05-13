<?php 
	# 引入文件
	require('config/config.php');
	require('config/db.php');

	$id = $_GET['id'];

	# 获取数据库中的内容
	$query = "SELECT * FROM posts WHERE id=$id";

	# 执行sql语句
	$result = mysqli_query($conn,$query);

	# 与数据库进行匹配
	$post = mysqli_fetch_assoc($result);
	# var_dump($posts);

	mysqli_free_result($result);

	# 关闭数据库
	mysqli_close($conn);
?>

<?php require('inc/header.php'); ?>
		<!-- 容器承载内容 -->
		<div class="well">
			<!-- 为页面添加返回按钮 -->
			<a class="btn btn-default" href="<?php echo ROOT_URL?>">返回</a>

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
		</div>
<?php require('inc/footer.php'); ?>












