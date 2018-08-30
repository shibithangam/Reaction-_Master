<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include"db_con.php";
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login where username='$username' and password='$password'";
       $result= queryMysql($query);
      if(mysqli_num_rows($result)==1){
         $_SESSION['username'] =$username;
         echo 'logged in'.$_SESSION['username'];
       }
       else{
           echo 'invalid credentials';
       }
    
}


?>