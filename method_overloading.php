<?php 

class Test {
    public function data() {
        return "I am from Test method!";
    }
}

class Test2 extends Test {
    // public function data() {
    //     return "I am from Test 2 method!";
    // }
}

$obj= new Test2;

echo $obj->data();

?>