<?php

class Base {

    public $name= "Rabid";

    public function calc($a, $b) {
        return $a * $b;
    }

}

class Derived extends Base {

    public $name= "Rabid Islam";

    public function calc($a, $b) {
        return $a + $b;
    }

}

$test= new Derived();
echo $test->name;
echo "<br><br>";
echo $test->calc(10, 5);

?>