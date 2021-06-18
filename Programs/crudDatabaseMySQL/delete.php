<?php 

 $user_id = $_GET['id'];

//database connection
$con = new mysqli('localhost', 'root', '', 'proj');

// echo "<pre>";
// print_r($con);

if ($con->client_info){
	//echo "Database Connected";
 }
 else{
 	echo "Error Ocurred in Database!";
 }

 $sql = "DELETE FROM users WHERE id='$user_id'";

 if($con->query($sql)){
 	header("location: view.php"); //redirect
 }
 else{
 	echo mysqli_error($con);
 }