<?php
    Class A{
        public $age=0;
        public $username='ClassName_A';
        
        public $obj=null;
    }
    //创建对象a
    $a=new A();
    //使用clone关键字复制对象a
    $b=clone $a;
    //改变对象b的属性
    $b->age=1;
    
    echo $a->age;