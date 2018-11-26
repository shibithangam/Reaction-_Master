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
	<h1>Review</h1>
<?php

include 'mysql.php';

$counter = unserialize($_REQUEST["cnt_array"]);
$query = $_REQUEST["id"];
foreach ($counter as $item) {
    $getData = $query($item);
    if ($getData != 0) {
        while ($row = mysqli_fetch_assoc($getData)) {
            ?>

<div align="center">
<br><br><br>
		<label for="reac1">  <?php echo $row['reactant1'] ?>  </label> 
        <label for="reac+">&nbsp;+&nbsp;</label> 
        <label for="reac2">  <?php echo $row['reactant2'] ?> </label>
        <label for="reac=">&nbsp;=&nbsp;</label> 
        <label for="prod">  <?php echo $row['product1'] ?> </label>
			 <br> 
	</div>

<?php
        }
    } else {
        echo "Missing Review questions";
    }
}
?>
<br><br>
<div align="center">
<input type="button" value="Home" onclick= 'window.location.href = "home.php"'>
</div>

