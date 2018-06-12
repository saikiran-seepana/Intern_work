<!DOCTYPE html>
<html>
	<head>
		<title>restaurant items</title>
		<meta charset="utf-8">
		<meta name="author" content="saikiran seepana">
	</head>
	<body>
		<div align="center">
			<table style="width:70%;">
				<td width="70%">
					<?php   
						include("db.php");
						$restaurant_id = $_GET['id'];
						$res = mysqli_query($conn,"SELECT * FROM restaurants where restaurant_id = '$restaurant_id'");
						$row = mysqli_fetch_row($res);
						echo "<img src='uploads/$row[4]' width='300px' height='200px'>";
						mysqli_close($conn);
					?>
				</td>
				<td width="30%">
					<?php 

						include("db.php");
						$restaurant_id = $_GET['id'];
						$res = mysqli_query($conn,"SELECT * FROM restaurants where restaurant_id = '$restaurant_id'");
						$row = mysqli_fetch_row($res);
						echo "$row[8]";
						mysqli_close($conn);
						echo "<br>";
						echo "Rating : $row[2] *";
					?>
				</td>
			</table>
		</div>

		<br><br>

		<div align="center">
			<table width="70%" border="2px">
				<tr>
					<td colspan="2" style=" padding: 10px;padding-top: 10px;"><h2 >Our Specials :</h2></td>
				</tr>
				<tr>
					<td style="padding: 10px;">
						<a onclick="haleem()" onmouseover="style.color='red';" onmouseout="style.color='black'" onmouseover="style='hover'">Ramzan Specials :</a>
						<p id="r1"></p>
						<p id="r2"></p>
						<p id="r3"></p>
					</td>
					<td style="padding: 10px;">
						
					</td>
				</tr>
				<tr>
					<td style="padding: 10px;">
						<a onclick="veg()" onmouseover="style.color='red';" onmouseout="style.color='black'" onmouseover="style='hover'">VEG :</a>
						<p id="v1"></p>
						<p id="v2"></p>
						<p id="v3"></p>
						<p id="v4"></p>
						<p id="v5"></p>
					</td>
					<td style="padding: 10px;">
						
					</td>
				</tr>
				<tr>
					<td style="padding: 10px;">
						<a onclick="nonveg()" onmouseover="style.color='red';" onmouseout="style.color='black'" onmouseover="style='hover'">NON-VEG :</a>
						<p id="nv1"></p>
						<p id="nv2"></p>
						<p id="nv3"></p>
						<p id="nv4"></p>
						<p id="nv5"></p>
					</td>
					<td style="padding: 10px;">
						
					</td>
				</tr>
				<tr>
					<td style="padding: 10px;">
						<a onclick="byriyani()" onmouseover="style.color='red';" onmouseout="style.color='black'" onmouseover="style='hover'">Byriyanis :</a>
						<p id="by1"></p>
						<p id="by2"></p>
						<p id="by3"></p>
						<p id="by4"></p>
						<p id="by5"></p>
					</td>
					<td style="padding: 10px;">
						
					</td>
				</tr>
			</table>
		</div>
	</body>
	<script type="text/javascript">
		function haleem()
		{
			document.getElementById("r1").innerHTML = " mutton haleem";
			document.getElementById("r2").innerHTML = "chicken haleem";
			document.getElementById("r3").innerHTML = "veg haleem";

		}
		function veg()
		{
			document.getElementById("v1").innerHTML = "Panner Butter Masala";
			document.getElementById("v2").innerHTML = "Cauliflower 65";
			document.getElementById("v3").innerHTML	= "Potato Cutlets";
			document.getElementById("v4").innerHTML = "Chana Masala";
			document.getElementById("v5").innerHTML = "Stuffed Pepper";
		}
		function nonveg()
		{
			document.getElementById("nv1").innerHTML = " Butter chicken Masala";
			document.getElementById("nv2").innerHTML = "Chicken manchuria";
			document.getElementById("nv3").innerHTML	= "mutton tika";
			document.getElementById("nv4").innerHTML = "fish masala";
			document.getElementById("nv5").innerHTML = "prawns specisl";
		}
		function byriyani()
		{
			document.getElementById("by1").innerHTML = " mutton byriyani";
			document.getElementById("by2").innerHTML = "Chicken byriyani";
			document.getElementById("by3").innerHTML	= "dum byriyani";
			document.getElementById("by4").innerHTML = "fish byriyani";
			document.getElementById("by5").innerHTML = "prawns byriyani";
		}
	</script>
</html>