<?php 
	
	# localhost/phpmyadmin 本地数据库地址

	# CREATE DATABASE userinfo // 创建一个数据库
	# DROP DATABASE userinfo; // 删除一个数据库
	/*
		创建一个数据表
		CREATE TABLE users(
			id INT NOT NULL AUTO_INCREMENT,
		    name VARCHAR(255),
		    age INT,
		    sex VARCHAR(255),
		    weight VARCHAR(255),
		    PRIMARY KEY(id)
		);
	*/

	# INSERT INTO users(name,age,sex,weight) VALUES("Henry",30,"男","65");

	/*  插入多条数据
		INSERT INTO users(name,age,sex,weight) VALUES
		("Bucky",25,"男","70"),
	    ("Emily",33,"女","45"),
	    ("Elyse",22,"女","55"),
	    ("Kitty",18,"女","48");
	*/

	/*  更新数据表中的某个字段
		UPDATE users SET sex="男" WHERE id=1;
	 */

	/*  删除id为6的字段
		DELETE FROM users WHERE id=6;
	 */


	/*	往数据表中插入字段
		ALTER TABLE users ADD tesCol VARCHAR(255);
	 */

	/* 	修改数据类型为INT
	    ALTER TABLE users MODIFY COLUMN tesCol INT(11);
	 */

	 /*	删除一个字段
	 	ALTER TABLE users DROP COLUMN tesCol;
	 */

	 /* 查询所有数据 *代表所有 
	 	SELECT * FROM users;
	 */

	 /* 查询id为2的字段
		SELECT * FROM users WHERE id=2;
	  */

	 /* 按照名字的从小到大查询
		SELECT * FROM users ORDER BY name;
	  */

	 /* 姓名从大到小排序
		SELECT * FROM users ORDER BY name DESC;
	  */

	 /* 姓名从小到大排序
		SELECT * FROM users ORDER BY name ASC;
	  */
 ?>