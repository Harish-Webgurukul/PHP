<?php
session_start();

if(isset($_SESSION['user'])){
    echo "Valid User";
}
else{
    header("location: logout.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <h2>Welcome</h2>
    <p> <a href="logout.php">Logout</a></p>
</body>
</html>