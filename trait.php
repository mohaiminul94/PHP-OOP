<?php 

trait User {
    public function userOne() {
        return "I am User One";
    }
    public function userTwo() {
        return "I am User Two";
    }
}

class TestUser {
    use User;
}

$obj= new TestUser;

echo $obj->userOne();
echo "<br>";
echo $obj->userTwo();

?>