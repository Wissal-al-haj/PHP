<?php
$area;
function calculateArea($height,$width){
   global $area;
   $area=$height*$width;
}
calculateArea(5,3);
echo "Area is = $area";
?>