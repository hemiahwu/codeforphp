$(function() {
	$("form #insert").on("click",function(e){
		e.preventDefault();
		// var name = document.getElementById("name").value; 
		// var age = document.getElementById("age").value; 

		// var xmlHttp = new XMLHttpRequest();

		// xmlHttp.open("POST","http://localhost/ajax_sandbox/website1/php/insertInfo.php",true);

		// xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");

		// xmlHttp.onreadystatechange = function(){
		// 	if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
		// 		console.log(xmlHttp.responseText);
		// 	}
		// }
		
		// xmlHttp.send("name="+name+"&age="+age);

		var name = $("#name").val();
		var age = $("#age").val();
		var item = {name:name,age:age}
		// $.post("php/insertInfo.php",item,function(data){
		// 	console.log(data);
		// });

		$.ajax({
			type:"POST",
			url: "php/insertInfo.php",
			data: item,
			// dataType: "json",
			success: function(data){
				console.log(data);
			}
		});
	})
});