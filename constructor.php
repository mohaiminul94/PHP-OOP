<?php

class User {
    public $name;
    public $age;

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    
    public function setName($name) {
        $this->name= $name;
    }
    public function setAge($age) {
        $this->age= $age;
    }

    function __construct($name,$age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    function __toString()
    {
        return "Hello,".$this->getName()."."."<br>Your age is ".$this->getAge();
    }

}

$newUser= new User('Rabid',24);

echo $newUser;

?>