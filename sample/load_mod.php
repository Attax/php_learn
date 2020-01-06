<?php
    //定义加载器类
    class AutoLoader{
        //注册加载方法
        public function load($className){
            //将命名空间的\替换成/ 映射为真实的类文件路径
            $classFilePath=str_replace("\\",'/',$className.'.php');
            require_once($classFilePath);
        }
    }
    
    //传入[类名,方法名]作为参数
    spl_autoload_register([new AutoLoader,'load']);
    
    $win=new systems\microsoft\windows();
    
    $mac=new systems\apple\mac();
    
    $win->showSys();
    $mac->showSys();