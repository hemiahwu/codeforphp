<?php 
	
	# 文件处理函数
	$path = 'dir0/dir1/myfile.php';
	$file = 'file1.txt';

	# 返回文件名
	# echo basename($path);

	# 返回文件名以上的路径
	# echo dirname($path);

	# 判断文件是否存在
	# echo file_exists($file);

	# 获取文件绝对路径
	# echo realpath($file);

	# 查看文件是否可读
	# echo is_readable($file);

	# 查看文件是否可写
	# echo is_writable($file);
	# echo is_writeable($file);

	# 查看文件大小
	# echo filesize($file);

	# 创建一个文件夹
	/*
	if (is_dir("testing")) {
		echo "文件已经存在!";
	}else{
		mkdir("testing");
	}
	*/

	# 删除一个文件夹(如果文件是空的)
	/*
	if (is_dir("testing")) {
		rmdir("testing");
	}else{
		echo "文件夹不存在!";
	}
	*/

	# 拷贝一个文件
	# echo copy($file, 'file2.txt');

	# 修改一个名字
	# echo rename('file2.txt', 'filenew.txt');

	# 删除一个文件
	# unlink('filenew.txt')

	# 获取文件中的内容
	# echo file_get_contents($file);

	# 写入内容到文件中
	/*
	$current = file_get_contents($file);

	$current .= "Hello Everybody";

	file_put_contents($file, $current);

	echo file_get_contents($file);
	*/

	# 打开一个文件
	$handle = fopen($file, 'r');
	# 读取文件内容
	$data = fread($handle, filesize($file));
	echo $data;
	# 关闭文件
	fclose($handle);

	# 打开一个文件
	$handle = fopen($file, 'w');
	$txt = "Henry";
	fwrite($handle, $txt);
	fclose($handle);

	# write / read

	#localhost/phpsandbox/website7/index.php
?>