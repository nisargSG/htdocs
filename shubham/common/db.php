<?php


$dbHost = "localhost";
$dbUser = "root";
$dbPassWord = "";
$dbName = "06jan";

function executeQuery($sqlQuery)
{

    global $dbHost,$dbUser,$dbPassWord,$dbName;

    // Create connection
    $dbConn = new mysqli($dbHost, $dbUser, $dbPassWord, $dbName);

    if ($dbConn->connect_error) {
        echo "Connection failed: " . $dbConn->connect_error;
        return false;
    } else {

        $result = $dbConn->query($sqlQuery);
        $dbConn->close();
        return $result;
    }
}



?>