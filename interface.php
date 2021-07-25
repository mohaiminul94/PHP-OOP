<?php

interface Base01 {
    function add($a, $b);
}

interface Base02 {
    function sub($a, $b);
}

class Derived implements Base01, Base02 {

    public function add($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

}

$test= new Derived();
echo $test->add(10, 5);
echo "<br><br>";
echo $test->sub(10, 5);

?>