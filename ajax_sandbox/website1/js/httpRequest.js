var http = new XMLHttpRequest();

http.onreadystatechange = function() {
	if (http.readyState == 4 && http.status == 200) {
		// console.log(http.response);
		// 解析拿到的json数据为js对象
		var response = JSON.parse(http.response);
		// 拿到response对象下的people数组
		var people = response.people;

		var output = "";

		for(var i = 0; i < people.length; i++){
			output += "<li>" + people[i].name + "</li>";
		}
		document.getElementById('people').innerHTML = output;
	}
}

http.open("GET","data/people.json",true);

http.send();