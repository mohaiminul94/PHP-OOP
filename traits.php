<?php

trait Info {

    public function userInfo() {
        echo "Rabid Islam, 26";
    }

    public function jobInfo() {
        echo "Software Engineer, Technometrics Limited";
    }

}


class Profile {
    use Info;
}

$obj=  new Profile();
$obj->userInfo();
echo "<br><br>";
$obj->jobInfo();

?>