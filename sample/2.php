<?php
    //定义一个类
    class Computer 
    {
        
        const SYS='windows';
        
        //构造方法，类实例化时会自动执行的方法
        public function __construct(){
            echo '父类初始化，执行构造方法';
        }
        
        final public function getSys(){
            echo '私有方法获取操作系统：'.self::SYS;
        }
        
    }
    
    //通过extends关键字继承Computer类
    class PC extends Computer 
    {
       
        public function __construct(){
            parent::__construct();
            echo '子类初始化，执行构造方法';
        }
       
        public function getSys(){
            echo '子类覆盖了父类的方法';
        }
    }
    
    //使用new关键字生成对象
    $pc=new PC();
    $pc->getSys();

    
