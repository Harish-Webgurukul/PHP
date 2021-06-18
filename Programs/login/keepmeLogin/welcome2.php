<?php 
//condition 2 to check the session id of file and current file sessionid
session_start();
//fetching current page session id
$sess_id = session_id();


if($sess_id == $_SESSION['session_id']){ //print or to get data from session file
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