<?php

trait Hello {
    public function sayHello() {
        echo "Hello from Hello Trait";
    }
}

trait Hi {
    private function sayHello() {
        echo "Hello from Hi Trait";
    }
}

class Base {
    use Hello, Hi {
        Hello::sayHello insteadof Hi;
        Hi::sayHello as public HiSayHello;
    }
}

$obj= new Base();
$obj->sayHello();
echo "<br><br>";
$obj->HiSayHello();

?>