<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<meta charset="utf-8">
</head>
<?php
global $id1;
session_start();
$id1 = $_GET['id'];
$_SESSION['id'] = $id1;
?>
<body bgcolor="lightgrey">
	<form method="POST" action="restaurant_edit2.php" enctype="multipart/form-data">
		<table align="center" style="position: relative;top:200px;">
			<tr>
				<td>Restaurant Name:</td>
				<td><input type="text" name="rn" id="rn"></td>
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="rating" id="rating"></td>
			</tr>
			<tr>
				<td>Location:</td>
				<td><input type="text" name="ln" id="ln"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" id="address"></td>
			</tr>
			<tr>
				<td>Image:</td>
				<td><input type="file" name="file" id="file" value="submit"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>