<?php

class Calculation {

    public $a, $b, $c;

    function sum() {
        $this->c= $this->a + $this->b;
        return $this->c;
    }

    function sub() {
        $this->c= $this->a - $this->b;
        return $this->c;
    }

}

$obj1= new Calculation();
$obj1->a= 20;
$obj1->b= 5;

$obj2= new Calculation();
$obj2->a= 20;
$obj2->b= 5;

echo "Obj 01 sum: " .$obj1->sum()."<br>";
echo "Obj 02 sub: " .$obj2->sub()."<br>";

?>