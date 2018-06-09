<!DOCTYPE html>
<html>
<head>
	<title>datesbetween</title>
</head>
<body>
	<h1>An example to print dates between two dates using php</h1>
	<p>
		<?php
			include('db.php');
			$res = mysqli_query($conn,"SELECT * FROM dates WHERE (dateofbirth BETWEEN '2018-05-30 14:15:55' AND '2018-09-29 10:15:55')");

			if (mysqli_num_rows($res) > 0) 
			{
				while($row = mysqli_fetch_assoc($res)){
        			echo "name: " . $row["name"]. " - mobile: " . $row["mobile"]. " date of birth " . $row["dateofbirth"]. " - pace:" .$row["place"]."<br>";
				}
			}
			else 
			{
				echo "0 results";
			}
			mysqli_close($conn);
		?>
	</p>
</body>
</html>
