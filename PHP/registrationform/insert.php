<?php
	include("db.php");
	if (isset($_POST["submit"])) 
	{
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
		$gender = mysqli_real_escape_string($conn,$_POST['gender']);
		$courses = mysqli_real_escape_string($conn,$_POST['courses']);
		$colour = mysqli_real_escape_string($conn,$_POST['colour']);
		$dates = mysqli_real_escape_string($conn,$_POST['dates']);
		$datee = mysqli_real_escape_string($conn,$_POST['datee']);
		$minhrs = mysqli_real_escape_string($conn,$_POST['minhrs']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
		$comments = mysqli_real_escape_string($conn,$_POST['comments']);

		$file = rand(1000,100000)."-".$_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder ="uploads/";

		$res = mysqli_query($conn,"INSERT INTO registrationform (name,mobile,email,password,linkedin,gender,courses,colour,file,dates,datee,minhrs,city,comments,type,size) VALUES ('$name', '$mobile' , '$email', '$password', '$linkedin', '$gender', '$courses', '$colour', '$file', '$dates', '$datee', '$minhrs', '$city', '$comments', '$file_type', '$file_size')");
		if ($res) {
			echo mysqli_errno($conn);
			header("Location : newasfsad.php");
		}
		else
		{
			echo "hello";
		}
	}

?>