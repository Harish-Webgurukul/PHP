<?php 
$email = $_POST['email'];
$password = $_POST['password'];
// echo "Your email : $email";
// echo "Your Password : $password";

$con = new mysqli("localhost", "root", "", "proj");

if($con->client_info){
	//echo "database Connected";
}
else{
	echo "Error in COnnection";
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $con->query($sql);

if($result->num_rows==1){
	// echo "Valid User";
	session_start();
	$_SESSION['user']=1;
	header("location:	welcome.php");
}
else if($result->num_rows>1){
	echo "Multiple email id exist!";
}
else{
	echo "Invalid User";
}
