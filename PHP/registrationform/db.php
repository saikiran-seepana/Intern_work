<?php
$conn=mysqli_connect("localhost","root","","sampledatabase");

if (mysqli_connect_errno($conn)) {
	echo "failed to connect to the data base".mysqli_connect_error();
}

?>