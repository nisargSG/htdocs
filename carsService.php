<?php

$carsArray = array("maruti","tata");

//this file will give data

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $carsJson = json_encode($carsArray);
    echo $carsJson; // Output the JSON
}

if($_SERVER["REQUEST_METHOD"]=="DELETE"){

    echo($_REQUEST["position"]);
    
    $carsJson = json_encode($carsArray);
    echo $carsJson; // Output the JSON

}



?>