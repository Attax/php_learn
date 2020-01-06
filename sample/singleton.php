<?php
	class Test{

		//定义一个静态属性，记录唯一的实例
		private static $_instance=null;

		//将构造函数私有化，使类无法被实例化（无法直接new一个类）
		private function __construct(){}

		//私有化__clone方法，使其无法被用来复制实例
		private function __clone(){

		}

		//封装一个获取实例方法，用来生成唯一实例
		public  function getInstance(){
			//判断类是否存在唯一实例
			if(!self::$_instance instanceof self){
				self::$_instance =new self();
			}
			return self::$_instance;
		}

	}

	//调用生成唯一实例的静态方法
	$test1=Test::getInstance();
	$test2=Test::getInstance();
	$test3=Test::getInstance();
	$test4=Test::getInstance();

	var_dump($test1);
	var_dump($test2);
	var_dump($test3);
	var_dump($test4);