<?php 
//string
$name = "Kaustubh/Somnathe";

$detail = explode('/', $name);
//array
print_r($detail);


echo "<br> after implode";
$name = implode(' ', $detail);
echo $name;


 ?>