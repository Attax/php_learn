<?php
    //定义加载器类
    Class AutoLoader{
        //注册加载方法
        public function load($className){
            require_once($className.'.php');
        }
    }
    
    //传入[类名,方法名]作为参数
    spl_autoload_register([new AutoLoader,'load']);
    
    new windows();
    
    new mac();