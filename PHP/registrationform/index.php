<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
	<meta name="author" content="SEEPANA SAI KIRAN">
</head>
<body>
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<table align="center" cellpadding="3" cellspacing="4">
			<tbody>
				<tr>
					<td><label>Name :</label></td>
					<td><input type="text" name="name" placeholder="Enter your name" maxlength="20" required="yes"></td>
				</tr>
				<tr>
					<td><label>Mobile Number:</label></td>
					<td><input type="number" name="mobile" pattern="[0-9]{10}" placeholder="Enter mobile no" required="yes"></td>
				</tr>
				<tr>
					<td><label>Email ID:</label></td>
					<td><input type="Email" name="email" maxlength="30" placeholder="Enter emailid" required="yes"></td>
				</tr>
				<tr>
					<td><label>Password :</label></td>
					<td><input type="Password" name="password" maxlength="15" placeholder="Enter a Password" required="yes"></td>
				</tr>
				<tr>
					<td><label>LinkedIn:</label></td>
					<td><input type="url" name="linkedin" placeholder="https://www.linkedin.com/in/seepana-sai-kiran-b1a997155/" required="yes"><br></td>
				</tr>
				<tr>
					<td><label>Gender :</label></td>
					<td><input type="radio" name="gender"> Male<input type="radio" name="gender" required="yes"> Female</td>
				</tr>
				<tr>
					<td><label>Courses Joined :</label></td>
					<td><input type="checkbox" name="courses">java <input type="checkbox" name="courses">php</td>
				</tr>
				<tr>
					<td><label>Select a Colour : </label></td>
					<td><input type="color" name="colour"></td>
				</tr>
				<tr>
					<td><label>Upload Files :</label></td>
					<td><input type="file" name="file" multiple="yes"></td>
				</tr>
				<tr>
					<td><label>Start Date : </label><input type="date" name="dates" min="2018-20-06" required="yes"></td>
					<td><label>End Date : </label><input type="date" name="datee" max="2020-20-06" required="yes"></td>
				</tr>
				<tr>
					<td><label>Min Class Hours:</label></td>
					<td>
						<input list="min Hours" placeholder="4" required="yes" name="minhrs">
							<datalist id="min Hours">
								<option value="2"></option>
								<option value="4"></option>
								<option value="6"></option>
								<option value="8"></option>
							</datalist>
						</input>
					</td>
				</tr>
				<tr>
					<td><label>City :</label></td>
					<td>
						<select required="yes" name="city">
							<option>Hyderabad</option>
							<option>Vizag</option>
							<option>Vijyawada</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Comments :</label></td>
					<td><textarea rows="6" cols="40" required="yes" name="comments"></textarea></td>
				</tr>
				<tr valign="center">
					<td><input type="submit" value="submit" name="submit">Submit</td>
					<td><button value="reset" >Reset</button></td>
				</tr>
			</tbody>
		</table>
		<br>
	</form>
</body>
</html>