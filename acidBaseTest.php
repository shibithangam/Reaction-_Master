<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign-In</title>
<link href="css/default.css" rel="stylesheet">
<script type="text/javascript" src="js/script.js"> </script>
</head>
<body id="body-color" onload="secondPassed();">
	<h1>Test on Acid-Base Reactions</h1>

<?php

include 'mysql.php';
include 'mail.php';


//fetch total count from combinations table
$getCnt = acidbase_count();
#$cnt = mysqli_fetch_assoc($getCnt);
while ($r = mysqli_fetch_assoc($getCnt)) {
    $cnt = $r['count'];
}

if (isset($_POST['submit'])) {
    $counter = unserialize($_POST["cnt_array"]);
    $product1_ans = unserialize(base64_decode($_POST["ans_given"]));
    
    $ans = $_POST["answer"];
    $ans_cnt = $_POST["ans_cnt"];
    $getData = acidbase(end($counter));
    while ($row = mysqli_fetch_assoc($getData)) {
        if($row['product1'] == $ans && $row['product2'] == $ans) {
            $ans_cnt++;
        }
        array_push($product1_ans, $ans);
    }
    

acidbase_review($_SESSION['username'],$_SESSION['examId'],implode(',', $counter),implode(',', $product1_ans),'','');
sendEmail($_SESSION['username'], $_SESSION['examId']);
session_destroy();

echo '<script type="text/javascript">
	        alert("you have got ' . $ans_cnt . ' out of ' . $cnt . '");
	        var arr = "<?php echo serialize($counter); ?>";
	        window.location.href = "resultPage.php?id=questions&cnt_array=' . serialize($counter) . '";
    </script>';
}


if (isset($_POST['next'])) {
    $counter = unserialize($_POST["cnt_array"]);
    $product1_ans = unserialize(base64_decode($_POST["ans_given"]));
    $counter = unserialize($_POST["cnt_array"]);
    $ans = $_POST["answer"];
    $ans_cnt = $_POST["ans_cnt"];
    $getData = acidbase(end($counter));
    while ($row = mysqli_fetch_assoc($getData)) {
        if($row['product1'] == $ans && $row['product2'] == $ans) {
            $ans_cnt++;
        }
        array_push($product1_ans, $ans);
    }
    
} else {
    $counter = array();
    $product1_ans = array();
    $ans_cnt = 0;
    $examNum = examId($_SESSION['username'], "acidbase");
    while ($row = mysqli_fetch_assoc($examNum)) {
        if ($row['num'] != null) {
            $_SESSION['examId'] = "acidbase_" . ($row['num']+1);
        } else {
    $_SESSION['examId'] = "acidbase_1";
        }
    }
}

//to genearate random number
$id = rand(1,$cnt);

//if id is already read then regenrate random number
while ((in_array($id, $counter)) && (sizeof($counter) < $cnt)){
    $id = rand(1,$cnt);
}

array_push($counter, $id);

//fetch question from combination table
$getData = acidbase($id);

if ($getData != 0) {
    while ($row = mysqli_fetch_assoc($getData)) {
        ?>
        
<p>Question <?php echo sizeof($counter); ?> of <?php echo $cnt?></p>
	<br>
	<div class="timer">
		<time id="cnt"></time>
	</div>
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
				<label for="reac1">&nbsp;+&nbsp;</label>
				<input type="text" name="answer" size="20" />
			<br>
			<br> 
			<?php if(sizeof($counter) < $cnt) {?>
			<br></br> <input type=submit name="next" value='Next Question'>
			<?php } else {?>
			<input type=submit name="submit" value='Submit'>
			<?php }?>
			<input type="hidden" name="cnt_array" value="<?php echo serialize($counter); ?>" />
			<input type="hidden" name="ans_cnt" value="<?php echo $ans_cnt; ?>" />
			<input type="hidden" name="ans_given" value="<?php echo base64_encode(serialize($product1_ans)); ?>" />
			<input type="hidden" name="ans_given" value="<?php echo base64_encode(serialize($product2_ans)); ?>" />
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
</html>