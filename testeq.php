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
$count="";
$counter=0;

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
 
 

     if(!isset($_POST['submit'])){         echo '<script>alert("PLEASE CLICK THE NEXT BUTTON !")</script>';
     //to display the values before botton click
      foreach ($data as $val) {
     $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations'];
      }
     
     }else{
        // array_rand($val,7);
        // $data[]=$row;
     //$count1=array();
    // $count=rand(0,100);
    // echo $count;
         $products=$_POST['product2'];
         $hidden=$_POST['hidden'];
         $count=$_POST['count'];
        
      
        //gives random values on button click 
        shuffle($data);
        foreach ($data as $val) {
         $reactant1=$val['reactant1'];
     $reactant2=$val['reactant2'];
     $product=$val['product1'];
     $hint=$val['hints'];
     $equ=$val['word_equations'];           
    /*echo $reactant1;
     echo $reactant2;
     echo $product;
     echo $hint;
 echo $equ;*/ 
     
    // $count=array();
     /*for($i=0;$i<=100;$i++){
      if($count1<=$i){
          break;
      // $counter++;  
      }
      echo $i;
//      $counter++;
     }*/
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
        }
       
     }
    

?>
<html>
    
    
    
    
    
    <head>
        <meta charset="UTF-8">
        <title>combination</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="javascript.js"></script>
       
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
                 
                  Hint1
          <input type="checkbox" id="hint1" name="hint" onclick="showhint();">
   
          
          <font id="com" color="red" style="display: none" > <?php 
         echo $hint;
         ?></font><br><br>
           <font id="word" color="blue" > <?php 
         echo $equ;
          ?></font>
      <br>
      <br>
       
     <font id="word" color="blue" > <?php 
         echo $reactant1;
          ?></font>&nbsp+
      
      
       <font id="word" color="blue" > <?php 
         echo $reactant2;
          ?></font>&nbsp -->
          <input type="text" name="product2" placeholder=""><br><br>
          <?php   echo $error?><br>
          The Product:
          <input id="proch" type="checkbox" name="proch" onclick="showpro();" style="color: red">
          <font id="chep" color="red" style="display:none "> <?php echo $product; ?></font>
          <input type="hidden" name="hidden" value="<?php echo $product ?>">
          <input type="hidden" name="count" value="<?php echo $count?>">
     
      <br>
      <br>
      
      <button type="submit" name="submit" onclick="add($count)">NEXT</button> &nbsp
      <!--<button type="submit" name="submit1">SUBMIT</button>-->
                
            </form>
        </div>
    </body>
</html>
