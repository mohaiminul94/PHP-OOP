<?php

class Person {

    public $name, $age;

    function __construct($name= "No name", $age= 0) {
        $this->name= $name;
        $this->age= $age;
    }

    function show() {
        echo "Name: " .$this->name." -- Age: ".$this->age."<br>";
    }

}

$p1= new Person("Rabid", 26);
$p2= new Person();

$p1->show();
$p2->show();

?>