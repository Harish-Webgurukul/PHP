<?php 

session_start(); //start the start and create session file at server
session_destroy(); // it is used to delete the file
header("location: index.php");

 ?>

