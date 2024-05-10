<?php

require_once("model/car.php");

class ControllerCars{

    public function getView(){

        //static function call with scope resolution operator
        $cars = Car::getAllCars();

        require_once "view/cars.php";
    }


}



?>