<?php
    Class Computer{
        public static $memory='Samsung';
        public static $harddrive='Kingston';
        
        public static function showDevice(){
            echo self::$memory;
        }
    }
    
    //继承Computer类
    Class Windows extends Computer{
        public function showMemory(){
            //调用父类静态方法
            return parent::showDevice();
        }
    }
    
    
    $pc=new Windows();
    $pc->showMemory();