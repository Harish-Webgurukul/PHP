<?php 
session_start();
$sess_id=session_id();

if($sess_id != $_SESSION['session_id']){
   session_destroy();
   header("location: index.php");
}

else{
	if($_SESSION['user_type']!='user'){
		session_destroy();
   		header("location: index.php");
	}
}
?>