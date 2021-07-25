<?php

abstract class Base {

    public $name;

    abstract protected function calc($a, $b);

}

class Derived extends Base {

    public function calc($a, $b) {
        return $a + $b;
    }

}

$test= new Derived();
echo $test->calc(10, 5);

?>