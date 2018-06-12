<?php
	include("db.php");
	if (isset($_POST["submit"])) 
	{
		
		$name = mysqli_real_escape_string($conn,$_POST['rname']);
		$ad = mysqli_real_escape_string($conn,$_POST['rad']);
		$rat = mysqli_real_escape_string($conn,$_POST['rat']);
		$loc = mysqli_real_escape_string($conn,$_POST['loc']);
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		$file = $_FILES['file']['name'];
		$file_id = rand(1000,100000)."-".$_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder ="uploads/";
		$moved = move_uploaded_file($file_loc,$folder.$file);  
		$res = mysqli_query($conn,"INSERT INTO restaurants(restaurant_id ,restaurant_name, rating , file_id, file, file_type, file_size, location , restaurant_address) VALUES  ('$id' , '$name' , '$rat' ,'$file_id','$file' , '$file_type' , '$file_size' , '$loc', '$ad' )");
		if ($res) {
			echo "inserted sucessfully";
		} else {
			echo "not inserted sucessfully";
		}
		
	}

?>