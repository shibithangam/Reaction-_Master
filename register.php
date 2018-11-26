<?php
error_reporting(0);
?>
<!DOCTYPE HTML> 
<html> 
<head> 
<title>Sign-Up</title> 
</head>
<body id="body-color">
<div id="Sign-Up"> 
<h4 align="right"><a href="logout.php">Log Out</a></h4>
<fieldset style="width:30%"><legend>Registration Form</legend>
 <table border="0"> 
 <tr> 
 <form method="POST" action=""> 
 <td>First Name</td>
 <td> 
 <input type="text" name="fname"></td>
 </tr>
 <tr> 
 <td>Last Name</td><td> 
 <input type="text" name="lname"></td>
 </tr>
 <tr> 
 <tr> <td>UserName</td><td> <input type="text" name="user"></td> 
 </tr>
 <tr>
 <td>Password</td><td> <input type="password" name="pass"></td> 
 </tr> 
 <tr> 
 <td>Confirm Password </td><td><input type="password" name="cpass"></td> 
 </tr> 
 <tr> 
 <td>DOB</td><td> 
 <input type="text" name="dob"></td>
 </tr>
 <tr> 
 <td>Email</td><td> <input type="text" name="email"></td> 
 </tr>
 <td>Phone number</td><td> 
 <input type="text" name="phone"></td>
 </tr>
 <tr> 
 <td>Gender</td><td>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
 <td><input id="button" type="submit" name="submit" value="Sign-Up"></td> 
 </tr>
 </form> 
 </table> 
 </fieldset> 
 </div> 
 </body> 
 </html>
 
 <?php

include 'mysql.php';

if (isset($_POST['submit'])) {
	$res = SignUp();
	if($res=="success") {
	//$fin = "INSERT INTO newcustomer(firstname, lastname,username, password, confirmpassword, dob,address, pincode, emailadd, phoneno) VALUES (?,?,?,?,?,?,?,?,?,?)";
	   // header('Location: homepage.php')
		//header('Location: reactions.php');
	}
	else {
		//echo ""
	}
    
}

?>
</html>


