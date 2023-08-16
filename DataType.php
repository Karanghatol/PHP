<?php
    // datatypes in php

    // Integer
    $i = 12;
    echo "Inteteger : $i <br>";

    // Float
    $f = 12.2;
    echo "Float : $f <br>";

    // Double
    $d = 12.22;
    echo "Double : $d <br>";

    // Character
    $c = 'c';
    echo "Character : $c <br>";

    // String
    $s = "This is String";
    echo "String : $s <br>";

    // Boolean / true
    $bt = true;
    echo "Boolean true : $bt <br>";

    // Boolean / False
    $bf = false;
    echo "Boolean false : $bf <br>";

    // Object
    class Demo{
        public $a;
        public function put($x){
            $this->a = $x;
        }
        public function get(){
            echo $this->a;
        }
    }
    // creating object of class 'Demo'
    $obj = new Demo;
    echo "Object : ";
    $obj->put("(Object of class Demo)");
    $obj->get();

    

?>