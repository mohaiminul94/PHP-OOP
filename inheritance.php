<?php 

class ParentClass {
    public $parentName= "Mr & Mrs Islam";

    public function countSiblings() {
        return 1;
    }
}

class childClass extends ParentClass{
    public $sibling= "Islam's";
}


$obj= new childClass;

echo $obj->parentName;
echo "<br>";
echo $obj->countSiblings();
echo "<br>";
echo $obj->sibling;
echo "<br>";

?>