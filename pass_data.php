<?php

class Test {
    public $name;

    function __construct($name)
    {
        $this->name= $name;
    }

}

class Test2 extends Test {
    public $age;

    function __construct($name,$age)
    {
        $this->age= $age;
        parent::__construct($name);
    }

}

$obj= new Test2("Rabid",24);

echo $obj->name;
echo "</br>";
echo $obj->age;

?>