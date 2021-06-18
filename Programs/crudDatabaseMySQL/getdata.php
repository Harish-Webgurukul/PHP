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
$email = $_GET['email'];
$password = $_GET['password'];
$city = $_GET['city'];
$mobile = $_GET['mobile'];

//query 
$sql = "INSERT INTO users VALUES(null, '$email', '$password', '$city', '$mobile')";

//query fire
if ($con->query($sql)){
	// echo "You are registered Successfully!";
	header("location: view.php");
}
else{
	//if error 
	echo mysqli_error($con);
}

