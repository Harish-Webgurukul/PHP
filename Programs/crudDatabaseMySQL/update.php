<?php 
 
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

//fetch data from the form
$user_id = $_GET['user_id'];
$email = $_GET['email'];
$password = $_GET['password'];
$city_id = $_GET['city_id'];
$mobile = $_GET['mobile'];

$sql = "UPDATE users SET email='$email', password='$password', city_id='$city_id', mobile='$mobile' WHERE id='$user_id'";

if($con->query($sql)){
	header('location: view.php');
}
else{
	echo mysqli_error($con);
}