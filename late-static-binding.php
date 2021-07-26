<?php

class Base {

    public static $name= "Rabid";

    public function show() {
        echo self::$name;
        echo "<br><br>";
        echo static::$name;
    }

}

class Derived extends Base {

    public static $name= "Islam";

}

$test= new Derived();
$test->show();

?>