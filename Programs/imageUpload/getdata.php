<?php 
$con = new mysqli("localhost", "root", "", "proj");

if($con->client_info){
	//echo "database Connected";
}
else{
	echo "Error in COnnection";
}

//FILE
// echo "<pre>";
// print_r($_FILES);
// exit();
$img_name = $_FILES['img']['name'];
$img_type = $_FILES['img']['type'];
$img_tmp_name = $_FILES['img']['tmp_name'];
$img_error = $_FILES['img']['error'];
$img_size = $_FILES['img']['size'];

//this function will move the file to specific location
if($img_type == "image/jpeg" ||  $img_type == "image/jpg" || $img_type == "image/png"){
	$destination="uploads/img/".$img_name;
}
elseif($img_type=="application/pdf"){
	$destination="uploads/pdf/".$img_name;
}
else{
	$destination="uploads/documents/".$img_name;
}

//Image Upload
if(move_uploaded_file($img_tmp_name, $destination)){
	echo "Image Uploaded Successfully!";
	$sql = "INSERT INTO images VALUES(NULL, '$img_name', '$destination')";
	if($con->query($sql)){
		header("location: view.php");
	}
	else{
		echo mysqli_error($con);
	}
}
else{
	echo "Error Occured! Plz try Again!";
}



 ?>