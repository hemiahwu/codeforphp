window.onload = function(){
	/*
	// 1.创建xmlHttpRequest对象
	var http = createXmlHttpRequestObject();
	function createXmlHttpRequestObject(){
		var xmlHttp = null;

		// 处理兼容
		if (window.ActiveXObject) {
			// 先尝试创建请求对象
			try{
				xmlHttp = new ActiveXObject("Microsoft.XMLHttp");
			}catch(e){ // 如果尝试失败,执行此方法
				xmlHttp = false;
				throw e;
			}	
		}else {
			try{
				xmlHttp = new XMLHttpRequest();
			}catch(e){
				xmlHttp = false;
				throw e;
			}
		}

		// 判断当前的xmlHttp是否为空
		if (!xmlHttp) {
			alert("对象创建失败!");
		}else{
			// 返回xmlHttp对象
			return xmlHttp;
		}}

	// 2.配置对象信息
	http.open("GET","data/people.json",true);

	// 3.监听状态信息
	http.onreadystatechange = function(){
		// console.log(http);
		if (http.readyState == 4 && http.status == 200) {
			// console.log(http.response);
			console.log(JSON.parse(http.response));
		}
	}

	// 4.发送请求对象
	http.send();

	console.log(http);
	*/

	$.get("data/people.json",function(data){

		console.log($.parseJSON(data));
	});

	console.log("test");
	
	/*  readyState
		- 0. 请求对象没有被实例化
		- 1. 请求对象应被实例化
		- 2. 请求对象已经被发送
		- 3. 请求对象正在发送中
		- 4. 请求对象已经发送完毕
	 */

}