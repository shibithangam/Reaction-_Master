<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <header>
            <nav>
                <div class="index_home">
                 <h2>   REACTION MASTER </h2>
                 
               </div>
            </nav>
        </header>
        <div>
       <center>
      <form class="home_page" action="" method= "post">
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
      <button type="submit" name="submit">LOGIN</button>
      <br>
      <br>
      <a href="passupdate.php"> Forgot password</a>
      <br>
      <br>
      Not a member? &nbsp<br>
     <a href="login.php"> SIGN UP</a>
      
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

include"db_con.php";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from registration where username='$username' and password='$password'";
       $result= queryMysql($query);
      if(mysqli_num_rows($result)==1){
         $_SESSION['username'] =$username;
         echo  '<script>alert("logged in")</script>';
         header('Location:select.php');
       }
       else{
           echo '<script>alert("invalid credentials")</script>';
       }
    
}


?>

