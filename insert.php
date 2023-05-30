<?php
$Servername="localhost";
$Username="root";
$Password="";
$Database="my_db";

$connection=mysqli_connect($Servername,$Username,$Password,$Database);
if(!$connection){
	//die("connection failed" .mysqli_connect_error());
}else{
	//echo"connection is successful <br />";
}

$directoryPath ="http://".$_SERVER['SERVER_NAME'].'/Skill/images/';

if(isset($_POST['submit'])){
	
	if(isset($_FILES['image'])){
		echo $fileName= $_FILES['image']['name'];
		echo $fileTmpName= $_FILES['image']['tmp_name'];
		move_uploaded_file($fileTmpName,"images/".$fileName);
		echo $finalImage= $fileName;
		//echo '<label>Photo</label><h2>'.$finalImage.'</h2>';
	}
	
	$sqlInsert= 'INSERT into images(image) VALUES("'.$finalImage.'")';
	//echo $sqlInsert;
	if(mysqli_query($connection,$sqlInsert)){
		echo "affected rows".mysqli_affected_rows($connection);
		
	}else{
		echo "error occur".mysqli_error($connection);
	}
	
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment</title>
	</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
	
	
	
	<label>Photo:</label>
	<input type="file" name="image" value="" /><br />
	
	<input type="submit" name="submit" value="submit">
	
	</form>
</body>
</html>