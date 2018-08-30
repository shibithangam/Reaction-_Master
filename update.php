<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include 'db_con.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username){
        $query="update registration set password='$password' where username='$username'";
        $res= queryMysql($query);
        if ($res==true) {
            echo '<script>alert("password updated")</script>'; 
            header('Location:index.php');
        }else{
            echo '<script>alert("password updated failed")</script>';
        }
    }
}