<?php
    //使用trait关键字
    trait traitExample{
        public $age=18;
        public function sayHello(){
            echo 'hello ';
        }
        
        
        public function sayWorld(){
            echo 'world ';
        }
        
        public function greet(){
            $this->sayHello();
            $this->sayWorld();
        }
    }
    
    //定义一个类 
    Class classSample{
        
        public $sex='male ';
        
        
        public function getSex(){
            echo $this->$sex;
        }
        
        public function greet(){
            echo 'hi, my world';
        }
    }
    

    
    //继承一个类
    class TestTrait extends classSample{
        //使用use关键字复用方法和属性
        use traitExample;
        
        public $sex='Female';
        //定义greet方法
        public function greet(){
            echo 'Hello,my own world! ';
        }
    }
    

    
    $test=new TestTrait();
    //trait
    $test->greet();
    echo $test->age;
    echo $test->sex;
    