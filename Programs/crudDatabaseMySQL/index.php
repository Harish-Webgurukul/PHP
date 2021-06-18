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

$sql = "SELECT * FROM cities";
$result = $con->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>Registeration Form</h2>

	<form action="getdata.php" method="GET">
		<p> <input type="email" name="email" placeholder="Email"></p>
		<p> <input type="password" name="password" placeholder="Password"></p>
		
		<p>City
			<select name="city">
			<?php while($data = $result->fetch_object()){

				echo "<option value='$data->id'> $data->city_name </option>";
			}
			?>
			</select>
		</p>
		<p> <input type="text" name="mobile" placeholder="Mobile"></p>
		<p> <input type="submit" value="Submit"></p>
	</form>
	<p><a href="view.php">View Data</a> </p>
</body>
</html>