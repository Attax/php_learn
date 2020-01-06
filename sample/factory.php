<?php
	class Memcache{
		public function set($key,$value){}
		public function get($key){}
		public function delete($key){}
	}


	class Redis{
		public function set($key,$value){}
		public function get($key){}
		public function delete($key){}
	}

	//定义一个缓存类
	class Cache{
		//定义一个工厂方法
		public static function factory(){
			return new Redis();
		}
	}

	$cache=new Cache();

