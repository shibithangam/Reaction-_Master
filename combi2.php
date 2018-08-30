<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.*/
 $row="";
$reactant1="";
$reactant2="";
$product="";
$hint="";
$equ="";
$error="";
//$count="";
$counter=0;
$correct="";
$check="false";
$error1="";
$reaction=$equ;

include 'db_con.php';
//query to dispaly the values from 2or more tables with join
 $query="select reactant1,reactant2,product1,hints,word_equations from
reactions join hints on reactions.rid=hints.rea_id 
join reaction_type on reactions.rid=reaction_type.reac_id
where reaction_type.combination='true'
";
 $res= queryMysql($query);
 $data=array();
 while($row= mysqli_fetch_array($res,MYSQLI_ASSOC)){
     $data[]=$row;
     
 }
 /*foreach ($data as $val) {
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations'];
     echo $reactant1;
     echo $reactant2;
     echo $product;
     echo $hint;
 echo $equ;}*/
 //$count=rand(0,100);
 $count=1;
 
 

     if(!isset($_POST['submit'])){        // echo '<script>alert("PLEASE CLICK THE NEXT BUTTON !")</script>';
     //to display the values before botton click
      foreach ($data as $val) { 
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations'];
      }
      //echo "heii";
     
     }else{
        // array_rand($val,7);
        // $data[]=$row;
     //$count1=array();
    // $count=rand(0,100);
    // echo $count;
         $products=$_POST['product2'];
         $hidden=$_POST['hidden'];
         $count=$_POST['count'];
        /* if(!isset($_POST['submit1'])){
             $error1="CLICK CHECK TO VERIFY ANSWER";
         }*/
        
      
        //gives random values on button click 
        shuffle($data);
        foreach ($data as $val) {
         $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations']; 
     //$counter=$count++;
   /* echo $reactant1;
     echo $reactant2;
     echo $product;
     echo $hint;
 echo $equ;
     
    // $count=array();
     for($i=0;$i<=100;$i++){
      if($count1<=$i){
          break;
      // $counter++;  
      }
      echo $i;
//      $counter++;
     }
        }
        if($products==$hidden){
         //counting by increment the right answer   
         $counter= $count++;
        
         echo '<script>alert("GREAT ! '.$counter.' answers correct")</script>';
        }else{
           //$error= "The previous product is ".$hidden; 
            //putting php variable in javascript
            //$count=0;
            echo '<script>alert("THE PRODUCT IS '.$hidden.' ")</script>';
            //$error= "THE PRODUCT IS"."<br>".$hidden;
        }*/
       
     }}
     if(!isset($_POST['submit1'])){$error1="CLICK CHECK TO VERIFY ANSWER"; //echo "byee";
     }
     else{
        /* $check="true";
           foreach ($data as $val) {
         $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
           $equ=$val['word_equations']; }*/
     
      $products=$_POST['product2'];
     
     $hidden=$_POST['hidden'];
     $product=$hidden;
     $equ=$reaction;
     $reactant1=$_POST['reactant1'];
     $reactant2=$_POST['reactant2'];
     //$equ1=$_POST['word_equation'];
     $hint=$_POST['hint'];
     $reaction= $_POST['equ'];
     $equ1=isset($_POST['word']);
     $reaction=$equ1;
    
     //$reaction=$equ;
           //$count=$_POST['count'];
         
         if($products==$hidden){
         //counting by increment the right answer   
        // $counter= $count++;
        
        // echo '<script>alert("GREAT ! '.$counter.' answers correct")</script>';
         $correct="GREAT!ANSWERS CORRECT";
         
        }else{
           //$error= "The previous product is ".$hidden; 
            //putting php variable in javascript
            //$count=0;
           // echo '<script>alert("THE PRODUCT IS '.$hidden.' ")</script>';
            $error= "THE PRODUCT IS"."<br>".$hidden;
          
            
           }
           
         
     }
    

?>
<html>
    
    
    
    
    
    <head>
        <meta charset="UTF-8">
        <title>combination</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="javascript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
$(document).ready(function(){
    $("#butmou").click(function(){
        $("word").hide();
        $("label").hide();
        $("proch").hide();
    });
    
});
    
   /* document.getElementById('bulmou').onclick=function(){
        document.getElementById('word1').style.visibility='hidden';
        return false;
    }*/
</script>
       
    </head>
    <body>
        
        <header>
            <nav>
               <!-- <div class="practice">
                     <a href="index.php"> HOME</a>
                     <br>
                 <a href="logout.php"> Logout</a>
                 <h2>   COMBINATION </h2>
                 
               </div>-->
            </nav>
        </header>
    
       
        <div id="practice2">
            <form id="comid2" action="" method="post">
                 <h2 id="header"> COMBINATIONS</h2> <br>
                 
                 <font id='hint' data-toggle="tooltip" data-placement="left" title=" click checkbox for hint">?</font>
          <input type="checkbox" id="hint1" name="hint" onclick="showhint();">
   
          
          <font id="com" color="red" style="display:none" > <?php 
         echo $hint;
         ?></font><br><br>
         <font id="word" color="blue" > <?php 
         echo $equ;
          ?></font>
      <br>
      <br>
       
     <font id="word2" color="blue" > <?php 
         echo $reactant1;
          ?></font>&nbsp+
      
      
       <font id="word3" color="blue" > <?php 
         echo $reactant2;
          ?></font>&nbsp -->
          <input type="text" name="product2" id="input"   placeholder="product"><br><br>
          <font id="correct"> <?php echo $correct?></font>
          <font id="error2"><?php   echo $error?></font><br><br>
          <label id="label">The Product:</label> 
          <input id="proch" type="checkbox" name="proch" onclick="showpro();" style="color: red">
          <font id="chep" color="red" style="display:none "> <?php echo $product; ?></font>
          <input type="hidden" name="hidden" value="<?php echo $product ?>">
          
          <input type="hidden" name="count" value="<?php echo $count?>">
          <input type="hidden" name="reactant1" value="<?php echo $reactant1?>">
          <input type="hidden" name="reactant2" value="<?php echo $reactant2?>">
          <input type="hidden" name="hint" value="<?php echo $hint?>">
          <input type="hidden" name="equ" value="<?php echo $equ?>">
          
     
      <br>
      <br>
      <?php// echo $error1?>
      <button type="submit" name="submit" id='buttonimg' data-toggle="tooltip" data-placement="left" title="click to go to next reaction"><img src="playbutton.gif" alt=/></button> 
      
      <?php //echo $error1?>
      <button type="submit" name="submit1" id="butmou" data-toggle="tooltip" data-placement="right" title="click to check answers" onclick="onclick();"> <img src="check.gif" alt=/></button>
      <br><br>
      <?php echo $error1?>
      <script>
        
      </script>
      <!--<button type="submit" name="submit1">SUBMIT</button>-->
      
      <font id="mouseover" style="display: none"> click to go to next reaction</font>
                
            </form>
        </div>
        
    </body>
</html>