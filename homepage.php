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

    <div id="home">
        
        <form>
            <h1>
                REACTION MASTER
            </h1><br><br>
            <a href="index1.php"> SIGN IN</a>
        </form>
    </div>
</body>

</html>
<?php

include 'db_con.php';

if (isset($_POST['submit'])) {
	$res = SignIn();
	if($res=="success") {
	   // header('Location: Register.php');h
		//header('Location: reactions.php');
	}
	else {
		//echo ""
	}
}

