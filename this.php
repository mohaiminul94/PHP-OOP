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
}

$newUser= new User;

$newUser->setName('Rabid');
$newUser->setAge(24);

echo "Name:".$newUser->getName();
echo "</br>";
echo "Age:".$newUser->getAge();

?>