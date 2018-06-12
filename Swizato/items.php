<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center" style="position: relative; top: 50px;">
		<table style="width:50%;">
			
			<?php 
				session_start();
				include("db.php");
	
				$res = mysqli_query($conn,"SELECT * FROM ");
				while ($row = mysqli_fetch_row($res)) {
					$id = $row[0];
					echo "
							<tr>
						 		<td style='padding:10px;width:30%;'><img src='uploads/$row[4]' style='width:200px;height:150px;'></img></td>
						 		<td style='padding:10px;width:20%;'>$row[1]</td>
						 		<td style='padding:10px;width:30%;'>$row[8]</td>
						 		<td style='padding:10px;width:20%;'><a href='admin_edit.php?id=$id'><input type='submit' name='submit' value='edit'></a><a href='admin_delete.php?id=$id'><input type='submit' name='delete' value='delete'></a></td>
						 	</tr>
					";
				}
			?>
		</table>
	</div>
</body>
</html>