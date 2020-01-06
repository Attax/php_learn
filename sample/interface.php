<?php 
	//声明一个接口
	interface Computer{
		public function start();

		public function reboot();

		public function calculate($taskName);
	}

	//接口的实现
	class Unix implements Computer{
		public function start(){
			echo '计算机正在启动中' ;
		}

		public function reboot(){
			echo '计算机正在重启';
		}

		public function calculate($taskName){
			echo '正在进行'.$taskName.'任务';
		}
	}


	class SUN {
		//定义静态方法，Computer接口作为类型约束
		public static function factory(Computer $name){
			return $name;
		}
	}


$solaris=SUN::factory(new Unix());

$solaris->calculate('弹道计算');