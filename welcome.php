<?php
error_reporting(0);
?>
<html>
<head>
<meta charset="UTF-8">
<title>Reaction Master Home Page</title>
<h4 align="right"><a href="logout.php">Log Out</a></h4>
<link href="css/default.css" rel="stylesheet">
</head>
<body>
	    <form  method="post" action="search.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
<h1>Welcome</h1>
<div style="overflow-x:auto;">
<table>
<td><b>Test</b></td>
<td><a href="testSelType.php">Click Here</a></td>
</tr>
<tr>
<td><b>practice</b></td>
<td><a href="reactionTypes.php">Click Here</a></td>
</tr>
<tr>
</table>
</div>
</body>

</html>
<?php

include 'db_con.php';

if (isset($_POST['submit'])) {
    $res = SignIn();
    if($res=="success") {
      header('Location: testPage.php');
        //header('Location: reactions.php');
    }
    else {
        //echo ""
    }
}