<?php 

$sum =0;

$arrays = array (
    array(1,22,18,78,45), //0
    array(43,15,13),   //1
    array(65,5,2),   //2
    array(76,17,15)   //3
  );


  foreach($arrays as $x){

    $sum=$sum+$x[0];

  }

  echo($sum);


?>