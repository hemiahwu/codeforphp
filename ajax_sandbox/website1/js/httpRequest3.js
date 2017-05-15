$(function(){
	// 同步的回调函数
	/*
		var fruit = ["apple","banana","pear"];
		fruit.forEach(function(data){
			console.log(data);
		});
		console.log(123);
	*/

	// 异步的回调函数
	/*
		function callback(data){
			console.log(data);
		}

		$.get("data/people.json",callback);

		console.log(123);
	*/

	$.ajax({
		type:"GET",
		url:"data/people.json",
		success: peoplecb,
		error: function(error){
			console.log(error);
		}
	});

	function peoplecb(data){
		data = $.parseJSON(data);
		data.people.forEach(function(item){
			$("#people").append($("<li>").text(item.name));
		});

		$.ajax({
			type:"GET",
			url: "data/friends.json",
			success: friendscb,
			error: function(error){
				console.log(error);
			}
		});
	}

	function friendscb(data){
		console.log(data);
		$.ajax({
			type:"GET",
			url: "data/videos.json",
			success: function(data){
				console.log(data);
			},
			error: function(error){
				console.log(error);
			}
		});
	}
});