<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                <center><h2> PASSWORD UPDATE</h2></center> 
                
            </div>
            
            </nav>
            
        </header> 
        <div class="main_login">
            <center>
                <form class="login-form" action="" method= "post">
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
      <button type="submit" name="submit">UPDATE</button>
      
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

session_start();
include 'db_con.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username){
        $query="update registration set password='$password' where username='$username'";
        $res= queryMysql($query);
        if ($res==true) {
            echo '<script>alert("password updated")</script>';   
        }else{
            echo '<script>alert("password updated failed")</script>';
        }
    }
}
?>
