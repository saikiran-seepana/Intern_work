<?php

include("db.php");
if(isset($_POST['submit'])) {

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);

$stime = mysqli_real_escape_string($conn,$_POST['stime']);


$dates = mysqli_real_escape_string($conn,$_POST['dates']);
$datee = mysqli_real_escape_string($conn,$_POST['datee']);
$message = mysqli_real_escape_string($conn,$_POST['message']);
 
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
$moved = move_uploaded_file($file_loc,$folder.$file);  

if ($moved) {
	echo "moved sucessfully";
}
else
{
	echo "unsucessful";
}

$res = mysqli_query($conn, "INSERT INTO sampleform ( 
name,
email,
gender,
stime,
file,
type,
size,
dates,
datee,
message


) VALUES 
  ('$name' , '$email' , '$gender', '$stime', '$file' , '$file_type' , '$file_size','$dates','$datee', '$message')");


if($res) {
  echo("Error description: " . mysqli_error($conn));
	header("Location: branchsetupnew.php");
	}
}
mysqli_close($conn);
?>



