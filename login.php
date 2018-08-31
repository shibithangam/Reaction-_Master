<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign-In</title>
<link href="css/default.css" rel="stylesheet">
</head>

<body id="body-color">
<body background="1.jpg">
</body>
	<div id="Sign-In">
		<fieldset style="width: 30%">
			<legend>LOG-IN HERE</legend>
			<form method="POST" action="">
				User <br> <input type="text" name="user" size="40"><br> Password <br>
				<input type="password" name="pass" size="40"><br> <input id="button"
					type="submit" name="submit" value="Log-In">
			</form>
		</fieldset>
	</div>
</body>
<?php

include 'mysql.php';

if (isset($_POST['submit'])) {
	$res = SignIn();
	if($res=="success") {
	    header('Location: welcome.php');
		//header('Location: reactions.php');
	}
	else {
		//echo ""
	}
    
}

?>
</html>
