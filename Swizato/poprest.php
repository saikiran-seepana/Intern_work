<!DOCTYPE html>
<html>
<head>
	<title>admin login page</title>
	<meta charset="utf-8">
	<meta name="author" content="saikiran seepana">

	<style type="text/css">
		body
		{
			background-image: url("bg.jpg");
		}
	</style>
</head>
<body>
	<div align="center" style="position: relative; top: 50px;">
		<table style="width:50%;">
			
			<?php 
				session_start();
				include("db.php");
				$res = mysqli_query($conn,"SELECT * FROM restaurants");
				while ($row = mysqli_fetch_row($res)) {
					$id = $row[0];
					echo "
							<tr>
						 		<td style='padding:10px;width:30%;'><img src='uploads/$row[4]' style='width:200px;height:150px;'></img></td>
						 		<td style='padding:10px;width:20%;'>$row[1]</td>
						 		<td style='padding:10px;width:30%;'>$row[8]</td>
						 		<td style='padding:10px;width:20%;'><a href='restaurant_items.php?id=$id'><input type='submit' name='delete' value='checkitems'></a></td>
						 	</tr>
					";
				}
			?>
		</table>
	</div>
	
</body>
</html>