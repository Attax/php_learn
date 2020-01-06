<?php
    class A{
        public $age=0;
       
        public $obj=null;
        
        public function run() {
            
        }
       
    }
    
    //定义一个函数
    function getRun(A $classA){
        var_dump($classA);
    }
    
    
  
    getRun(new A());