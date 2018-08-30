<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$server="localhost";
 $username="root";
 $password="admin";
 $dbname="reactions_master";

$connection = new mysqli($server, $username, $password, $dbname);
if ($connection->connect_error)
    die($connection->connect_error);

function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result)
        die($connection->error);
    return $result;
}

function validateuser($username){
  $query="select * from login where username='$username'";
    $result=  queryMysql($query);
     if($result->num_rows){
          echo '<script>alert("username exists")</script>';
          header('Location: login.php');
          exit();
      }else{
          echo "";
      }
     
   function validate($username,$password) {
       $query="select * from login where username='$username' and password='$password'";
       $result= queryMysql($query);
       $row=mysql_fetch_array($result);
       if( $row['username']==$username && $row['password']==$password){
       echo"logged successfully";}
       else{
           echo 'invalid credentials';
       }
       
       }
   } 
      
    