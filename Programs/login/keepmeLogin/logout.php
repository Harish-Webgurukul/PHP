<?php 

session_start(); //start the start and create session file at server
session_destroy(); // it is used to delete the file
setcookie("session_id", session_id(), time()-1); //CREATE COOKIE
header("location: index.php");

 ?>

