// JSON: JavaScript Object Notation
// 轻量级数据类型 容易解读 使用范围更广
// Array Object String Number Null Boolean
// JSON: {"name":"Henry"}
/*
	var people = {
		name: "Henry",
		age: 30
	};
*/
// 将people对象转化为json数据
// people = JSON.stringify(people);
// 将people json数据解析为js对象
// people = JSON.parse(people);

// console.log(people.name);

// 复杂对象数据类型
/*
var person = {
	name: "Henry",
	age: 30,
	address:{
		street:"dingsilu",
		city: "beijing",
		test: [
			{name: 'hello'},
			{age: 30},
			{test2: [
				"Elyse"
			]}
		]
	},
	children: ["Bucky","Nicholas-zhaosi"]
};

console.log(person.address.test[2].test2[0]);
*/

var people = [
	{
		name:"Henry",
		age:30
	},
	{
		name:"Bucky",
		age:20
	},
	{
		name:"Emily",
		age:22
	}
];

var output = "";
for (var i = 0; i < people.length; i++) {
	output += people[i].name;
}
document.getElementById("people").innerHTML = output;