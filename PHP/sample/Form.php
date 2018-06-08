<!DOCTYPE html>
<html>
<body>
<head>
<title> Sample Form with PHP+ MYSQL</title>
</head>
<h2>Intern Sample Forms</h2>

<form action="insert.php"  method="POST" enctype="multipart/form-data">

 Enter Your Name:<br>
  <input  type="text" name="name" id="name">
  <br><br>
 Enter Your Email ID:<br>
  <input name="email" type="text" name="email" id="email">
  <br>
<br>
Choose Gender: <br>
  <input type="radio" name="gender" value="male" id="gender"> Male<br>
  <input type="radio" name="gender" value="female" id="gender"> Female<br>
<br>

<br>
Choose Shift Time:<br>
   <select name="stime" id="stime">
    <option value="Morning">Morning</option>
    <option value="AfterNoon">AfterNoon</option>
    <option value="Evening">Evening</option>
    </select>
<br><br>
Upload Documents:<br>
<input type="file" id="file" name="file">
<br>
<br>
Course 
Start Date:
<input type="date" name="dates" id="dates">
End Date:
<input type="date" name="datee" id="datee">



  <br><br>
<label> Comments: </label><br>
  <textarea name="message" rows="10" cols="80" id="message">

</textarea>

<br>  

  <input type="submit" id="submit" name="submit">
</form>

</body>
</html>

