<?php 
	
	# 创建一个类
	class Person{
		# 属性property
		private $name;
		protected $email;

		private static $ageLimit = 40;

		public static function getAgeLimit(){
			return self::$ageLimit;
		}

		# 方法 method
		public function setName($myname,$age,$sex){
			$this->name = $myname;
		}

		public function getName(){
			return $this->name."<hr>";
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email."<hr>";
		}

		# 构造函数
		public function __construct($name,$email="hello"){
			$this->name = $name;
			$this->email = $email;
			
			# magic variable
			# echo __CLASS__." is created!";
		}

		# 析构函数
		public function __destruct(){
			echo __CLASS__." is destroyed!<hr>";
		}
	}

	# 实例化一个对象
	$person1 = new Person("Henry");

	# $person1->name = "Henry";
	# echo $person1->name;

	# 调用set & get
	# $person1->setName("Bucky");
	# echo $person1->name; // 仍然报错
	# echo $person1->getName();

	# 调用email的get & set
	# $person1->setEmail("henry@gmail.com");
	# echo $person1->getEmail();

	# echo $person1->getEmail();


	# 继承extends
	class Customers extends Person{
		private $balance;

		# 重写父类构造函数
		public function __construct($name,$email,$balance){
			parent::__construct($name,$email);
			$this->balance = $balance;
		}

		public function setBalance($balance){
			$this->balance;
		}

		public function getBalance(){
			return $this->balance."<hr>";
		}
	}

	$customer = new Customers("Hemiah","hemiah@gmail.com",30);

	echo $customer->getName();

	echo $customer->getBalance();

	# echo $customer->email;

	# echo Person::$ageLimit;

	echo Person::getAgeLimit();

	/*
		public: 访问场景

			- 类的外部可以访问
			- 类的内部可以访问
			- 类的子类可以访问

		private: 访问场景
			- 类的内部可以访问

		protected: 访问场景
			- 类的内部可以访问
			- 类的子类可以访问
	*/

	# localhost/phpsandbox/website8/oop.php
?>