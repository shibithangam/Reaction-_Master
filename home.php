<?php
error_reporting(0);
?>
<html>
<head>
<meta charset="UTF-8">
<title> Home Page</title>
<link href="css/Refined.css" rel="stylesheet">
</head>

<body>

<h1> Reaction Master Home Page</h1><br>
<div style="overflow-x:auto;">

<br><br><br><br><br><br><br><b>Sign In</b>
<a href="login.php">Click Here</a>
<br><br><br><br><br><br><br><b>Sign Up</b>
<a href="register.php">Click Here</a>
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