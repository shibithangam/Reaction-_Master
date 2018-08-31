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
	<h1>Test on Oxygen Reactions</h1>

<?php

include 'mysql.php';


//fetch total count from combinations table
$getCnt = oxy_count();
#$cnt = mysqli_fetch_assoc($getCnt);
while ($r = mysqli_fetch_assoc($getCnt)) {
    $cnt = $r['count'];
}

if (isset($_POST['submit'])) {
    $ans = $_POST["answer"];
    $ans_cnt = $_POST["ans_cnt"];
    $getData = oxyg(end($counter));
    while ($row = mysqli_fetch_assoc($getData)) {
        if($row['product1'] == $ans && $row['product2'] == $ans) {
            $ans_cnt++;
        }
    }
    echo '<script type="text/javascript">
            alert("you have got '.$ans_cnt.' out of '.$cnt.'");
            window.location.href="resultPage.php";
    </script>';
}

if (isset($_POST['next'])) {
    $counter = unserialize($_POST["cnt_array"]);
    $ans = $_POST["answer"];
    $ans_cnt = $_POST["ans_cnt"];
    $getData = oxyg(end($counter));
    while ($row = mysqli_fetch_assoc($getData)) {
        if($row['product1'] == $ans && $row['product2'] == $ans) {
            $ans_cnt++;
        }
    }
    
} else {
    $counter = array();
    $ans_cnt=0;
}

//to genearate random number
$id = rand(1,$cnt);

//if id is already read then regenrate random number
while ((in_array($id, $counter)) && (sizeof($counter) < $cnt)){
    $id = rand(1,$cnt);
}

array_push($counter, $id);

//fetch question from combination table
$getData = oxyg($id);

if ($getData != 0) {
    while ($row = mysqli_fetch_assoc($getData)) {
        ?>
        
<p>Question <?php echo sizeof($counter); ?> of <?php echo $cnt?></p>
	<br>
	<br>
	<div align="center">
		<form method="POST" action="">
			<label for="reac1">  <?php echo $row['reactant1'] ?>
                </label> <label for="reac1">&nbsp;+&nbsp;</label> <label
				for="reac2">  <?php echo $row['reactant2'] ?>
                </label> <label for="reac1">&nbsp;=&nbsp;</label> <input
				type="text" name="answer" size="20" /> 
				 <label for="reac1">&nbsp;+&nbsp;</label>
				<input type="text" name="answer" size="20" />
			<br>
			<br> 
			<?php if(sizeof($counter) < $cnt) {?>
			<input type=submit name="next" value='Next Question'>
			<?php } else {?>
			<input type=submit name="submit" value='Submit'>
			<?php }?>
			<input type="hidden" name="cnt_array" value="<?php echo serialize($counter); ?>" />
			<input type="hidden" name="ans_cnt" value="<?php echo $ans_cnt; ?>" />
		</form>
	</div>
	        <?php
    }
}
?>
	<br>
	<!--<p hidden>abcdefghijklmnopqrstuvwxyz</p>
<p><b>Instructions:</b></p>-->
   <br><br><br><br><br><br><br><br><br>
	<p style="text-align: left">Instructions : Write your answer in the provided block against question and select 'Next question' button to move to next question in the test.</p>
</body>
<script type="text/javascript">
public function alert()
{
    alert('In test Function');
}
        
</script>
</html>