<?php 

 $user_id = $_GET['id'];

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
 $sql = "SELECT * FROM users WHERE id='$user_id'";

 $result = $con->query($sql);
 $data = $result->fetch_object();

//for cities
$sql2 = "SELECT * FROM cities";
$result2 = $con->query($sql2);
 //print_r($data);

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
	<h2>Edit Form</h2>

	<form action="update.php" method="GET">
		<input type="hidden" name="user_id" value="<?php echo $data->id ?>" >
		<p> Email: <input type="email" name="email" placeholder="Email" value="<?php echo $data->email?>"></p>
		<p> Password: <input type="text" name="password" placeholder="Password" value="<?php echo $data->password?>"></p>
		<p>City
			<select name="city_id">
			<?php while($data2 = $result2->fetch_object()){
				if($data->city_id == $data2->id){
					echo "<option value='$data2->id' selected='selected'> $data2->city_name </option>";
				}else{
					echo "<option value='$data2->id'> $data2->city_name </option>";
				}
				
			}
			?>
			</select>
		<p> Mobile: <input type="text" name="mobile" placeholder="Mobile" value="<?php echo $data->mobile?>"></p>
		<p> <input type="submit" value="Update"></p>
	</form>
	<p><a href="view.php">View Data</a> </p>
</body>
</html>