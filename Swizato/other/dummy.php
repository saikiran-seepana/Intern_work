<?php

	include("db.php");
	if (isset($_POST["subimt"])) {
		$file = $_FILES['file']['name'];
		$file_id = rand(1000,100000)."-".$_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder ="uploads/";
		$moved = move_uploaded_file($file_loc,$folder.$file);

		$res = mysqli_query($conn,"UPDATE restaurants SET $file_id = '$file_id' WHERE restaurant_id = 1");

	if (mysqli_errno($conn)) {
			
			header("Location : newasfsad.php");
		}
		else
		{
			echo "hello";
			echo mysqli_error($res);
		}
	}

?>