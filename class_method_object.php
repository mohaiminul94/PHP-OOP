<?php

class Person {
    
    public $message="Welcome to PHP OOP";

    public function hello($name) {
        return "Hello,".$name;
    }

}

$obj= new Person;

echo $obj->message;
echo "<br>";
echo "<br>";
echo $obj->hello('Rabid');

?>