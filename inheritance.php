<?php

class Employee {

    public $name, $age, $salary;

    function __construct($n,$a, $s) {
        $this->name= $n;
        $this->age= $a;
        $this->salary= $s;
    }

    function info() {
        echo "<strong>Employee Info</strong> <br><br>";
        echo "Name: ". $this->name. "<br>";
        echo "Age: ". $this->age. "<br>";
        echo "Salary: ". $this->salary. "<br>";
    }

}

class Manager extends Employee {

    public $ta= 2000, $phone= 600, $totalSalary;

    function info() {
        $this->totalSalary= $this->salary + $this->ta + $this->phone;
        echo "<br><br><strong>Manager Info</strong> <br><br>";
        echo "Name: ". $this->name. "<br>";
        echo "Age: ". $this->age. "<br>";
        echo "Salary: ". $this->totalSalary . "<br>";
    }

}

$e1= new Employee("Rabid Islam", 26, 30000);
$e1->info();

$e2= new Manager("Mr. Rabid", 27, 30000);
$e2->info();

?>