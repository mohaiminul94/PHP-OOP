<?php

$allData= array(
    array("Rabid", 24),
    array("Kazi", 22),
    array("Tanvir", 23)
);

// echo $allData[1][1];

foreach($allData as $datas) {
    foreach($datas as $data) {
        echo $data." ";
    }
    echo "<br>";
}

?>