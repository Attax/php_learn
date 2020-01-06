<?php
	//定义一个接口a
	interface a {
	    public function foo();
	}
	//定义接口b
	interface b {
	    public function bar();
	}
	//接口c继承接口a和接口b
	interface c extends a, b {
	    public function baz();
	}

	//实现接口c
	class d implements c{
	    public function foo() {
	    	echo 'I am foo!';
	    }

	    public function bar() {
	    	echo 'I am foo!';
	    }

	    public function baz() {
	    	echo 'I am foo!';
	    }

	    public static function greet(){
	    	self::foo();
	    	self::bar();
	    	self::baz();
	    }

	}


	d::greet();