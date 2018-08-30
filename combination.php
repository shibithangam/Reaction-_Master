<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*session_start();
if(!isset($_SESSION['username'])){
header('Location:index.php');
 exit();
}*/
include 'db_con.php';

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
          $query="select hints ,word_equations from hints where id=1";
          $ret=queryMysql($query);
          while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
         $equation1=$row['hints'];
         $word=$row['word_equations'];
       /* echo $equation1; 
        echo $word;*/
};
$query="select hints ,word_equations from hints where id=2";
$ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
    $equation2=$row['hints'];
    $word1=$row['word_equations'];
  // echo $equation2; 
}
$query="select hints ,word_equations from hints where id=3";
$ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
    $equation3=$row['hints'];
    $word2=$row['word_equations'];
  /*echo $equation3; 
  echo $word2;*/
}
$query="select hints ,word_equations from hints where id=4";
$ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
    $equation4=$row['hints'];
    $word3=$row['word_equations'];
   /*echo $equation4;
   echo $word3;*/
}
$query="select hints ,word_equations from hints where id=5";
$ret=queryMysql($query);
while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
    $equation5=$row['hints'];
    $word4=$row['word_equations'];
   /*echo $equation5;
   echo $word4;*/
}
          ?> 
           
        <div id="practice2" style="display:">    
      <form class="practiceform" action="" method= "post">
          <h2 id="header"> COMBINATIONS</h2> <br>
          
          
          Hint1
          <input type="checkbox" id="hint1" name="hint" onclick="showhint();">
   
          
          <font id="com" color="red" style="display: none" > <?php 
         echo $equation1;
         ?>(Na2O+H2O=2NaOH)</font><br><br>
           <font id="word" color="blue" > <?php 
         echo $word;
          ?></font>
      <br>
      <br>
       
      <input type="text" name="reactant1" id="reactant1" placeholder="">&nbsp+
      
      
      <input type="text" name="reactant2" placeholder="">&nbsp -->
      <input type="text" name="product1" placeholder="">
      
      <br>
      <br>
       
       
       Hint2
       <input type="checkbox" id="hint2" name="hint" onclick="showhint1();">
           <font id="com1" color="red" style="display: none"><?php echo $equation2;?>(2H2+O2=2H2O)</font>
           <br><br>
           <font id="word" color="blue" > <?php 
         echo $word1;
          ?></font>
      <br>
      <br>
       
      <input type="text" name="reactant3" placeholder="">&nbsp+
      
      <input type="text" name="reactant4" placeholder="">&nbsp-->
      <input type="text" name="product2" placeholder="">
      <br>
      <br>
       
       Hint3
       <input type="checkbox" id="hint3" name="hint" onclick="showhint2();" >
           <font id="com2" color="red" style="display: none" > <?php echo $equation3?>(Li+O2=Li2O)</font>
            <br>
            <br>
             <font id="word" color="blue" > <?php 
         echo $word2;
          ?></font>
      <br>
      <br>
       
      <input type="text" name="reactant5" placeholder="">&nbsp+
      
      <input type="text" name="reactant6" placeholder="">&nbsp-->
      <input type="text" name="product3" placeholder="">
      <br>
      <br>
       
       Hint4
       <input type="checkbox" id="hint4" name="hint" onclick="showhint3();" >
           <font id="com3" color="red" style="display: none"> <?php echo $equation4?>(Mg+O2=MgO)</font>
           
           <br>
           <br>
            <font id="word" color="blue" > <?php 
         echo $word3;
          ?></font>
      <br>
      <br>
       
      <input type="text" name="reactant7" placeholder="">&nbsp+
      
      <input type="text" name="reactant8" placeholder="">&nbsp-->
      <input type="text" name="product4" placeholder="">
      <br>
      <br>
       Hint5
    
      <!-- <label id="mouse" onmouseover="document.getElementById('com4').style.display='block'" onmouseout="document.getElementById('com4').style.display='none'">Hint</label> -->
      <input type="checkbox" id="hint5" name="hint"  onclick="showhint4();" >
           <font id="com4" color="red"  style="display: none"> <?php echo $equation5?>(H2+Cl2=HCl)</font>
           <br>
           <br>
              <font id="word" color="blue" > <?php 
         echo $word4;
          ?></font>
      <br>
      <br>
       
      <input type="text" name="reactant9" placeholder="">&nbsp+
     
      <input type="text" name="reactant10" placeholder="">&nbsp-->
      <input type="text" name="product5" placeholder="">
      
      <br>
      <br>
      <br>
      <br>
      
      <button type="submit" name="submit">SUBMIT</button>
      
      
</form>  
              
            
        </div>
    </body>
</html>
<?php
$equation1="";

//include 'db_con.php';
$error1="";
$error2="";
$product1="";
$error3="";
$error4="";
$product2="";
$error5="";
$error6="";
$product3="";
if(isset($_POST['submit'])){
    $reac1=$_POST['reactant1'];
    $reac2=$_POST['reactant2'];
    $prod=$_POST['product1'];
    
    $reac3=$_POST['reactant3'];
    $reac4=$_POST['reactant4'];
    $prod1=$_POST['product2'];
    
    $reac5=$_POST['reactant5'];
    $reac6=$_POST['reactant6'];
    $prod2=$_POST['product3'];
    
    $reac7=$_POST['reactant7'];
    $reac8=$_POST['reactant8'];
    $prod3=$_POST['product4'];
    
    $reac9=$_POST['reactant9'];
    $reac10=$_POST['reactant10'];
    $prod4=$_POST['product5'];
    
    $query="SELECT * FROM reactions where rid=2";
    $ret= queryMysql($query);
    while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
         $reactant1=$row['reactant1'];
         $reactant2=$row['reactant2'];
         $product1=$row['product1'];
        
        
        if($reac1==$reactant1){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant1")</script>';
        // $error1="check reactant";   echo '<script>alert("check the reactant1")</script>';
            
        }
        if($reac2==$reactant2){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant1")</script>';
            
         // $error2="check reactant";  echo '<script>alert("check the reactant1")</script>';
            
        }
       if($prod==$product1){
           echo '<script>alert("GREAT!")</script>';
           
       }else{
           //header('Location:practice.php');
           echo '<script>alert("check the product1")</script>';
        // $product1="check product";  echo '<script>alert("check the product1")</script>';
           
       }
    }
    $query="SELECT * FROM reactions where rid=3";
    $ret= queryMysql($query);
    while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
         $reactant3=$row['reactant1'];
         $reactant4=$row['reactant2'];
         $product2=$row['product1'];
        
        
        if($reac3==$reactant3){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant2")</script>';
        // $error3="check reactant";   echo '<script>alert("check the reactant2")</script>';
        }
        if($reac4==$reactant4){
            echo '';
        }else{
          //  header('Location:practice.php');
            echo '<script>alert("check the reactant2")</script>';
        //$error4="check reactant";    echo '<script>alert("check the reactant2")</script>';
        }
       if($prod1==$product2){
           echo '<script>alert("GREAT!")</script>';
       }else{
          // header('Location:practice.php');
           echo '<script>alert("check the product2")</script>';
        // $product2="check product"; echo '<script>alert("check the product2")</script>';
       }
    }
      $query="SELECT * FROM reactions where rid=4";
    $ret= queryMysql($query);
    while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
         $reactant5=$row['reactant1'];
         $reactant6=$row['reactant2'];
         $product3=$row['product1'];
        
        
        if($reac5==$reactant5){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant3")</script>';
        // $error5="check reactant";   echo '<script>alert("check the reactant3")</script>';
        }
        if($reac6==$reactant6){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant3")</script>';
        
            // $error6="check reactant"; echo '<script>alert("check the reactant3")</script>';
        }
       if($prod2==$product3){
           echo '<script>alert("GREAT!")</script>';
       }else{
          // header('Location:practice.php');
           echo '<script>alert("check the product3")</script>';
       // $product3="check product";   echo '<script>alert("check the product3")</script>';
       }
    }
        $query="SELECT * FROM reactions where rid=5";
    $ret= queryMysql($query);
    while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
         $reactant7=$row['reactant1'];
         $reactant8=$row['reactant2'];
         $product4=$row['product1'];
        
        
        if($reac7==$reactant7){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant4")</script>';
        // $error5="check reactant";   echo '<script>alert("check the reactant3")</script>';
        }
        if($reac8==$reactant8){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant4")</script>';
        
            // $error6="check reactant"; echo '<script>alert("check the reactant3")</script>';
        }
       if($prod3==$product4){
           echo '<script>alert("GREAT!")</script>';
       }else{
          // header('Location:practice.php');
           echo '<script>alert("check the product4")</script>';
       // $product3="check product";   echo '<script>alert("check the product3")</script>';
       }
    }
        $query="SELECT * FROM reactions where rid=6";
    $ret= queryMysql($query);
    while($row= mysqli_fetch_array($ret, MYSQL_ASSOC)){
         $reactant9=$row['reactant1'];
         $reactant10=$row['reactant2'];
         $product5=$row['product1'];
        
        
        if($reac9==$reactant9){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant5")</script>';
        // $error5="check reactant";   echo '<script>alert("check the reactant3")</script>';
        }
        if($reac10==$reactant10){
            echo '';
        }else{
           // header('Location:practice.php');
            echo '<script>alert("check the reactant5")</script>';
        
            // $error6="check reactant"; echo '<script>alert("check the reactant3")</script>';
        }
       if($prod4==$product5){
           echo '<script>alert("GREAT!")</script>';
       }else{
          // header('Location:practice.php');
           echo '<script>alert("check the product5")</script>';
       // $product3="check product";   echo '<script>alert("check the product3")</script>';
       }
    }
}


?>