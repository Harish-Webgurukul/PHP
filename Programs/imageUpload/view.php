<?php 
$con = new mysqli("localhost", "root", "", "proj");

if($con->client_info){
	//echo "database Connected";
}
else{
	echo "Error in COnnection";
}

$sql = "SELECT * FROM images";
$result = $con->query($sql);
//print_r($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.imgdiv{
			height: 200px;
			margin-left: 10px;
			margin-bottom: 100px;
			float: left;
		}
		.pdf, .document{
			height: 100px;
			width: 100px;
			color: white;
			border: 2px solid grey;
			border-radius: 20px;
			text-align: center;
			padding: 40px;
		}
		.pdf{
			background: red;
		}
		.document{
			background: limegreen;
		}
		.imgName{
			color: green;
		}
		p{
			text-align: center;
		}
		.btn{
			height: 20px;
			width: 100px;
			border: 1px solid #bd3636;
			text-decoration: none;
			color: white;
			background: orange;
			padding: 10px;
		}
		.btn:hover{
			background: green;

		}
	</style>

</head>
<body>
 		<div class="container">
 		<p align="center">
 			<a href="index.php">Upload Image</a>
 		</p>
 		<?php
 			while($data = $result->fetch_object()){
 				echo "<div class='imgdiv'>";
 				$dataType = explode('.', $data->image_name);
	 			//print_r($dataType);
	 			$len = count($dataType);
	 			// echo "Length ".$len;

	 			if($dataType[$len-1]=='jpg' || $dataType[$len-1]=='jpeg' || $dataType[$len-1]=='png'){
	 				echo "<img src='$data->image_path' height='200'>";
	 			}
	 			else if($dataType[$len-1]=='pdf'){
	 				echo "<div class='pdf'>PDF</div>";
	 			}
	 			else if($dataType[$len-1]=='mp3'){
	 				echo "<audio controls>";
	 				echo " <source src='$data->image_path' type='audio/mpeg'>";
	 				echo "</audio>";
	 			}
	 			else if($dataType[$len-1]=='mp4' || $dataType[$len-1]=='avi'){
	 				echo "<video width='320' height='240' controls>";
	 				echo " <source src='$data->image_path' type='audio/mpeg'>";
	 				echo " <source src='$data->image_path' type='audio/avi'>";
	 				echo "</video>";
	 			}
 				else{
 					echo "<div class='document'>Document</div>";
 				}
 				echo "<p class='imgName'> $data->image_name</p>";
 				echo "<p><a href='download.php?path=$data->image_path' class='btn'>Download</a></p>";
 				echo "</div>";

 			}
 		?>

 		</div>
</body>
</html>