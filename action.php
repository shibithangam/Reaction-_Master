<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*session_start();
if(!isset($_SESSION['usernme'])){
header('Location:index.php');
 exit();
}*/
include 'db_con.php';
if (isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $country=$_POST['country'];
    $query="insert into wishes (name,country)values('$name','$country')";
    $res= queryMysql($query);
    if($res==true){
        echo 'inserted';
    }else{echo 'not inserted';}

}

if(isset($_POST['submit1'])){
    $name1=$_POST['name'];
    $country1=$_POST['country'];
    
    if($name1){
     $query="update wishes set country='$country1' where name='$name1'" ; 
     $res= queryMysql($query);
     if($res==true){
         echo 'updated';
     }else{
         echo 'not updated';
     }
    }
}

if( isset($_POST['submit2'])){
    
  $name2=$_POST['name']  ;
  $country2=$_POST['country'];
  $query="delete from wishes where name='$name2'";
  $res= queryMysql($query);
  if($res==true){
      echo 'data deleted';
  }else{
      echo 'not deleted';
  }
}

if(isset($_POST['submit3'])){
    
 $name3=$_POST['name'] ;
 $country3=$_POST["country"];
 $query="select * from wishes";
 $res= queryMysql($query);
 while($row= mysqli_fetch_array($res)){
     echo $row['name']."<br>";
     
     echo $row['country'];
 }
}