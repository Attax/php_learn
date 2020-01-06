<?php
    class A{
        public $age=0;
        public $username='ClassName_A';
        
        public $obj=null;
        
        //定义魔术方法__clone
        public function __clone(){
            //对引用属性进行clone, 复制一份新的，开辟新的内存空间，切断引用造成的影响
            $this->obj=clone $this->obj;
        }
    }
    
    
    class B{
        public $sex='male';
    }
    
    
    //创建对象a
    $a=new A();
    
    //设置对象a的obj属性为一个对象
    $a->obj=new B();
    
    //使用clone关键字复制对象a
    $b=clone $a;
    
    //修改对象b的obj属性的sex属性
    $b->obj->sex='female';
    
    echo $a->obj->sex;