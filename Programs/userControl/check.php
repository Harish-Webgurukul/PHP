<?php 
$email = $_POST['email'];
$pass = $_POST['pass'];

//user
if($email=="scott@gmail.com" AND $pass=="123"){

	//it create the file at server location
	session_start(); //server memory = file
	//to store data in session file
	$_SESSION['session_id']=session_id();
	$_SESSION['user_type']="user";
	$_SESSION['user']="harish";

	//to redirect the user
	header("location: welcome.php");
}
//admin
else if($email=="admin@gmail.com" AND $pass=="123"){
	//it create the file at server location
	session_start(); //server memory = file
	//to store data in session file
	$_SESSION['session_id']=session_id();
	$_SESSION['user_type']="admin";
	$_SESSION['user']="harish";

	//to redirect the user
	header("location: admin/dashboard.php");
}

else{
	echo "Invalid user";
}

 ?>	

