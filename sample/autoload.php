<?php
    //注册autoload函数，用来加载类
    function __autoload($className){
        require $className.'.php';
    }
    
    new windows();
    
    new mac();