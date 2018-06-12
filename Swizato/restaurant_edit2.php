<?php
	global $id1;
	include ("db.php");
	session_start();
	$id1 = $_SESSION['id'];

	if(isset($_POST['submit'])) 
	{
		$rname = mysqli_real_escape_string($conn,$_POST['rn']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$rating = mysqli_real_escape_string($conn,$_POST['rating']);
		$location = mysqli_real_escape_string($conn,$_POST['ln']);

		$file = rand(1000,100000)."-".$_FILES['file']['name'];
 		$file_loc = $_FILES['file']['tmp_name'];
 		$file_size = $_FILES['file']['size'];
 		$file_type = $_FILES['file']['type'];
 		$folder="uploads/";
 
 		move_uploaded_file($file_loc,$folder.$file);

		$res = mysqli_query($conn, "UPDATE restaurants SET restaurant_name='$rname',rating='$rating',address='$address',location='$location',file='$file',type='$file_type',size='$file_size' WHERE rid = $id1");

 		if($res)
 		{
 			echo ("ERROR DESCRIPTION:". mysqli_errno($conn)) ;
 			echo "upadted succesfully";
 		}
 	} 
 	mysqli_close($conn); 
 ?> 
