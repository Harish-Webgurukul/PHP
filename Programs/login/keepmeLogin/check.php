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

	if(isset($_POST['logged_in'])){
		//this will store data in browser
    	setcookie("session_id", session_id(), time()+3600); //CREATE COOKIE
	}
	

	//to redirect the user
	header("location: welcome.php");
}
else{
	echo "Invalid user";
}

 ?>	

