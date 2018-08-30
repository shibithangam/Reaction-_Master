<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
$reactant1="";
$reactant2="";
$product="";
$equ="";
$hint="";
$product2="";
$error="";
include 'db_con.php';
     if(!isset($_POST["submit"])){ echo '<script>alert("PLEASE CLICK THE BUTTON!")</script>';}
     else{
    $query="select reactant1,reactant2,product1,hints,word_equations from
reactions join hints on reactions.rid=hints.rea_id 
join reaction_type on reactions.rid=reaction_type.reac_id
where reaction_type.combination='true'
order by rand()
limit 1";
    $ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
   $reactant1=$row['reactant1'];
   $reactant2=$row['reactant2'];
   $product=$row['product1'];
   $hint=$row['hints'];
   $equ=$row['word_equations'];
   
 $pro=$_POST['product2']  ;
 if($pro===$row['product1']){
     echo '<script>alert("GREAT!")</script>';
 }else{
     echo '<script>alert("please check!")</script>';
 }

}}

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
    
        <?php
        /*if(isset($_POST["submit"])){
    $query="select reactant1,reactant2,product1,hints,word_equations from
reactions join hints on reactions.rid=hints.rea_id 
join reaction_type on reactions.rid=reaction_type.reac_id
where reaction_type.combination='true'
order by rand()
limit 1";
    $ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
   $reactant1=$row['reactant1'];
   $reactant2=$row['reactant2'];
   $product=$row['product1'];
   $hint=$row['hints'];
   $equ=$row['word_equations'];
   /*$pro=$_POST['product'];
 if($pro==$product ){
      echo '<script>alert("GREAT!")</script>';
 } else {
     echo '<script>alert("please check ")</script>';
     
 } 
    
}}*/
        ?>
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
          The product is
          <input id="proch" type="checkbox" name="proch" onclick="showpro();">
          <font id="chep" color="red" style="display:none "> <?php echo $product; ?></font>
     
      <br>
      <br>
      
      <button type="submit" name="submit">NEXT</button> &nbsp
      <!--<button type="submit" name="submit1">SUBMIT</button>-->
                
            </form>
        </div>
    </body>
</html>
<?php
/*if( isset($_POST['submit'])){
    
       $pro=$_POST['product2'];
 if($pro!==$product ){
      echo '<script>alert("pleasecheck!")</script>';
 } else {
     echo '<script>alert("Great! ")</script>';
     
 }  
   
}
$product2="";
echo $product;
if(isset($_POST['submit'])){
    
    $pro=$_POST['product2'];
    $query="select * from reactions where product1='$product'";
        $ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
    $prduct2= $row['product1'];
 if($pro==$product2 ){
      echo '<script>alert("GREAT!")</script>';
 } else {
     echo '<script>alert("please check ")</script>';
     
 }    
     
} }*/

?>