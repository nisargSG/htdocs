<?php

require_once 'common/util.php';
require_once 'common/db.php';


//cookie && valid 
//cars
if(isset($_COOKIE["token"])){

    $userEmail = decodeInfo($_COOKIE["token"]);

    //db check
    $result = executeQuery("SELECT * FROM WHERE email = '$userEmail'");

    header($result->num_wors>0?"Location:cars.php":"Location:login.php");

}
header("Location:login.php");

//login



?>