<?php 
$email = $_POST['email'];
$pass = $_POST['pass'];

//echo $email.$pass;

if($email=="scott@gmail.com" AND $pass=="123"){
	//echo "Valid user!";
	
	//it create the file at server location
	session_start(); //server memory = file
	//to store data in session file
	$_SESSION['session_id']=session_id();
	$_SESSION['user']="harish";

	//to redirect the user
	header("location: welcome2.php");
}
else{
	echo "Invalid user";
}

 ?>	

