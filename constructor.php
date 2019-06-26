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

}

$newUser= new User('Rabid',24);

echo "Name:".$newUser->getName();
echo "</br>";
echo "Age:".$newUser->getAge();

?>