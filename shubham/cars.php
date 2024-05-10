<?php

//session check
require_once('common/session_checker.php');


require_once('controller/cars.php');

$controllerCars = new ControllerCars();
$controllerCars->getView();



?>