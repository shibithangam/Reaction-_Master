<?php
error_reporting(0);
?>
<html>
<head>
<meta charset="UTF-8">
<title>Reaction Master Home Page</title>
<link href="css/default.css" rel="stylesheet">
</head>

<body>

	    <form  method="post" action="search.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
<h1>Reaction Master <br> Home Page</h1><br><br>
<div style="overflow-x:auto;">
<table>
<td><b>Sign In</b></td>
<td><a href="login.php">Click Here</a></td>
</tr>
<tr>
<td><b>Sign Up</b></td>
<td><a href="register.php">Click Here</a></td>
</tr>
<tr>
</table>
</div>
</body>

</html>
<?php

include 'mysql.php';

if (isset($_POST['submit'])) {
	$res = SignIn();
	if($res=="success") {
	   // header('Location: Register.php');
		//header('Location: reactions.php');
	}
	else {
		//echo ""
	}
}