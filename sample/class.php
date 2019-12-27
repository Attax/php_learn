<?php
    //定义一个类
    class Computer{
        //构造方法，类实例化时会自动执行的方法
        public function __construct(){
            echo '类初始化，执行构造方法';
        }
        
        
        /**
        * 类属性的访问控制
        * public 公有的 可以在任何地方被访问 
        * private 私有的，只有自身可以访问
        * protected 受保护的，只有自身以及其父类和子类可以访问
        */
        
        public $cpu='amd';
        private $motherboard='华硕主板';
        protected $memory='海盗船';
        
        /**
        * 类属性的访问控制
        * public 公有的 可以在任何地方被调用 
        * private 私有的，只有自身可以调用
        * protected 受保护的，只有自身以及其父类和子类可以调用
        */
        
        //
        public function getCPU(){
            //在类的内部，通过$this关键字访问属性，$this表示当前实例，指向当前对象本身
            return $this->cpu;
        }
        
        public function showCPU(){
            //在类的内部，通过$this关键字调用方法
            echo 'CPU型号:'.$this->getCPU();
        }
        
        //析构方法，对象被销毁时会调用的方法
        public function __destruct(){
            echo '对象被销毁时调用了析构方法';
        }
        
        
    }
    //使用new关键字生成对象
    $computer=new Computer();
    
    var_dump($computer->getCPU());
    $computer->showCPU();