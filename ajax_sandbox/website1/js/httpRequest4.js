$(function(){
	// getJSON获取到的json数据,已经是被解析完的对象
	// $.getJSON("php/selectInfo.php",function(data){
	// 	data.forEach(function(obj){
	// 		$("#people").append($("<li>").text(obj.name));
	// 	});
	// });

	$.ajax({
		type: "GET",
		url: "php/selectInfo.php",
		dataType: "json",
		success: function(data){
			// console.log(data);
			// data = $.parseJSON(data);
			data.forEach(function(obj){
				$("#people").append($("<li>").text(obj.sex));
			});
		}
	});
});