<?php
$cars = [
    "BMW" => "7er",
    "Mercedes" => "A-Klasse",
    "Nissan" => "X-Trail"
];

foreach($cars as $marke => $modell){
    echo $marke . "=>" . $modell;
    echo "<br>";
}



?>