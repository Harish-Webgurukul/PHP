<?php 
//condition 1 to check the session variable
session_start();

if(isset($_SESSION['session_id'])){ //print or to get data from session file
 echo "Welcome user!";
}
else{
	session_destroy();
	header("location: index.php");
}


if(!isset($_SESSION['user'])){ //print or to get data from session file
 session_destroy();
	header("location: index.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<body>
	<p>welcome to php</p>
	<p> <a href="logout.php"> Logout </a> </p>
</body>
</html>