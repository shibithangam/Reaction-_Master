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
<h4 align="right">
	<a href="logout.php">Log Out</a>
</h4>
	    <form  method="post" action="search.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
	    

<h1>Congratulations</h1>
<div align="center" style="overflow-x:auto;">
<br><br><br><br><br>
<input type="button" value="Home" onclick= 'window.location.href = "home.php"'>
<br><br><br><br><br>
<input type="button" value="Review" onclick='window.location.href = "review.php?id=<?php echo $_GET["id"];?>
													&cnt_array=<?php echo $_GET["cnt_array"];?>"'>
</div>



