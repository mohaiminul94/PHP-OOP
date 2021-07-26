<?php

class Base {

    public static $name= "Rabid";

}

class Derived extends Base {

    public static function show() {
        echo Base::$name;
    }

}

$test= new Derived();
$test->show();

//echo Base::$name;
//echo "<br><br>";
//Base::show();

?>