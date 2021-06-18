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

 $sql = "SELECT users.*, cities.city_name FROM users INNER JOIN cities ON users.city_id=cities.id";


//query fire
 $result = $con->query($sql);
 // print_r($result);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Data</title>
</head>
<body>
    <p><a href="index.php">To Register</a></p>
    <h2 align="center">View Data from Database</h2>
    <table border="2" align="center">
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            <th>Mobile</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            //one by one data fetch- using fetch object
            while($data = $result->fetch_object()){
                echo "<tr>";
                echo "<td> $data->id </td>";
                echo "<td> $data->email </td>";
                echo "<td> $data->password </td>";
                echo "<td> $data->city_name </td>";
                echo "<td> $data->mobile </td>";
                echo "<td> <a href='edit.php?id=$data->id'> Edit </a></td>";
                echo "<td> <a href='delete.php?id=$data->id'> Delete </a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>