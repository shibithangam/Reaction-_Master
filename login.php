<?php


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                
            <div class="main_wrapper">
                <footer>
                    <a href="index.php"> HOME</a></footer> 
                <center><h2> REGISTER</h2></center> 
                
            </div>
            
            </nav>
            
        </header> 
        <div class="main_login">
            <center>
                <form class="login-form" action="login.php" method= "post">
                    
               
      FIRST NAME:
      <input type="text" name="firstname" placeholder="firstname">
      <br>
      <br>
      <br>
      LAST NAME:
      <input type="text" name="lastname" placeholder="lastname">
      <br>
      <br>
      <br>
      EMAIL:
      <input type="text" name="email" placeholder="abcd@gmail.com">
      <br>
      <br>
      <br>
      USERNAME:
      <input type="text" name="username" placeholder="username">
      <br>
      <br>
      <br>
      PASSWORD:
      <input type="password" name="password" placeholder="password">
       <br>
      <br>
      <br>
      CONFIRM PASSWORD:
      <input type="password" name="cpassword" placeholder="password">
      <br>
      <br>
      <br>
      <button type="submit" name="submit">REGISTER</button>
      
</form>
            </center>
</div>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "db_con.php";
//include"errors.php";
//$error;
$firstname="";
$lastname="";
$email="";
$username="";
$password="";
$cpassword="";
//$errors=array();
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username= ($_POST['username']);
$password= ($_POST['password']);
$cpassword= ($_POST['cpassword']);

     //checking the field are empty
    if(empty($_POST['username'])){
        echo '<script>alert("username is required")</script>';
        
    }
    
    if(empty($_POST['password'])){
        echo '<script>alert("password is required")</script>';
    }
    if(empty($_POST['firstname'])){
        echo '<script>alert("firstname is required")</script>';
    }
    if(empty($_POST['lastname'])){
        echo '<script>alert("lastname is required")</script>';
    }
    if(empty($_POST['email'])){
        echo '<script>alert("email is required")</script>';
    }
    if(empty($_POST['cpassword'])){
        echo '<script>alert("confirm password is required")</script>';
    }
    
    if($password!=$cpassword){
       echo '<script>alert("both passwords doesn match")</script>';
    }
   //checking user name exists 
    else
        {
     $query="select username from registration where username='$username'";
    $result=  queryMysql($query);
     if($result->num_rows){
         // header('Location: login.php');
          echo '<script>alert("username exists")</script>';
           //header('Location: login.php');
          exit();
      }else{
          echo "";
      }   
     if(count($errors)==0){
    $query = "INSERT INTO registration (username, password,firstname,lastname,email) VALUES('$username', '$password','$firstname','$lastname','$email')"; 
    $ret = queryMysql($query);
    if($ret==true){
    echo '<script>alert("Registered Successfully")</script>';
    header('Location:index.php');
    }else{
   // header('Location: login.php');
    echo'<script>alert("Not registered")</script>';
    exit();
    
}}}}


