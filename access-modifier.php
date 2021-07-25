<?php

class Base {

    protected $name;

    public function __construct($n) {
        $this->name= $n;
    }

    protected function show() {
        echo $this->name;
    }

}

class Derived extends Base {

    public function get() {
        echo $this->name;
    }

}

$test= new Derived("Rabid");
//$test->name= "Rabid Islam";
$test->get();

?>