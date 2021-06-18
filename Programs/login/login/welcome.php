<?php 
//persistent cookie

setcookie("city", "nagpur", time()+3600);


echo $_COOKIE['city'];

 ?>