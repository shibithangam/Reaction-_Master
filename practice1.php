<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$equation1="";

include 'db_con.php';

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
            echo '<script>alert("check the reactant1")</script>';
            
        }
        if($reac2==$reactant2){
            echo '';
        }else{
            echo '<script>alert("check the reactant1")</script>';
            
        }
       if($prod==$product1){
           echo '<script>alert("GREAT!")</script>';
           
       }else{
           echo '<script>alert("check the product1")</script>';
           
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
            echo '<script>alert("check the reactant2")</script>';
        }
        if($reac4==$reactant4){
            echo '';
        }else{
            echo '<script>alert("check the reactant2")</script>';
        }
       if($prod1==$product2){
           echo '<script>alert("GREAT!")</script>';
       }else{
           echo '<script>alert("check the product2")</script>';
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
            echo '<script>alert("check the reactant3")</script>';
        }
        if($reac6==$reactant6){
            echo '';
        }else{
            echo '<script>alert("check the reactant3")</script>';
        }
       if($prod2==$product3){
           echo '<script>alert("GREAT!")</script>';
       }else{
           echo '<script>alert("check the product3")</script>';
       }
    }
}


?>

