<?php
    trait HelloWorld {
        public function sayHello(){
            echo 'Hello World!';
        }

    }

    //修改HelloWorld 的访问控制
    class MyClass1 {
        use HelloWorld {sayHello as protected;}
    }

    // 给方法一个改变了访问控制的别名
    // 原版 sayHello 的访问控制则没有发生变化
    class MyClaass2{
        use HelloWorld { sayHello as private myPrivateHello; }
    }