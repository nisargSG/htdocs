<?php

require_once("common/db.php");

class Car{

    private $id,$name,$model,$image;

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getModel(){
        return $this->model;
    }

    public function getImage(){
        return $this->image;
    }



    public function __construct($id,$name,$model,$image){
        $this->id=$id;
        $this->name=$name;
        $this->model=$model;
        $this->image=$image;
    }

    public static function getAllCars(){
        $result = executeQuery("SELECT * FROM cars");
        if($result->num_rows>0){
            //new empty array
            $cars = [];
            while($row=$result->fetch_assoc()){
                //getting all cars - pushing into cars array
                $cars[] =  new Car($row["id"],$row["name"],$row["model"],$row["image"]);
            }
            return $cars;
        }
        else{
            return false;
        }
    }

}



?>