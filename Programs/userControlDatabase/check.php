<?php 

$con = new mysqli("localhost", "root", "", "proj");

if($con->client_info){
	//echo "database Connected";
}
else{
	echo "Error in COnnection";
}

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result = $con->query($sql);
$data = $result->fetch_object();
// print_r($data);

// exit();

//user
if($data->user_type=='2'){

	//it create the file at server location
	session_start(); //server memory = file
	//to store data in session file
	$_SESSION['session_id']=session_id();
	$_SESSION['user_type']="user";
	//to redirect the user
	header("location: welcome.php");
}
//admin
else if($data->user_type=='1'){
	//it create the file at server location
	session_start(); //server memory = file
	//to store data in session file
	$_SESSION['session_id']=session_id();
	$_SESSION['user_type']="admin";
	//to redirect the user
	header("location: admin/dashboard.php");
}

else{
	echo "Invalid user";
}

 ?>	

