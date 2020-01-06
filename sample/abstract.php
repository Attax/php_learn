<?php 
	//定义一个抽象类
	abstract class Computer{
		//定义抽象方法，抽象方法不能包含方法体
		abstract protected function start();
		//非抽象方法
		public function reboot(){
			echo '计算机正在重启';
		}

		//非抽象方法
		public function calculate($taskName){
			
		}
	}

	//抽象类的继承
	class Unix extends Computer{
		//实现抽象类的方法，访问控制必须和抽象类的抽象方法一样甚至更宽松
		public function start(){
			echo '计算机正在启动中' ;
		}


		//实现抽象类的方法
		public function calculate($taskName){
			echo '正在进行'.$taskName.'任务';
		}
	}



$solaris=new Unix();

$solaris->reboot();
$solaris->calculate('弹道计算');