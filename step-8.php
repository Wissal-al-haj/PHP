<?php
//a
$index_array=array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo"Hello Sir, do you have ".$index_array[0]." , " .$index_array[1]. " , and " .$index_array[2]." ? Also if you sell fruits can I find a ".$index_array[5]." ? <br>";
//b
$array_multi = array(
 "eggs"=>array( 'balade', 'mazere3' ), 
 "milk"=>array('Fresh', 'Taanayel'),
 "water-pack"=>array( 'Tanoureen', 'Reem')
);
echo"Hey Sir, Please I need 1 pack of ". $array_multi['eggs'][0] ." eggs and 3 ".$array_multi['water-pack'][1]." water pack";
?>