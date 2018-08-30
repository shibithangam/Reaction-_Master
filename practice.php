<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(!isset($_SESSION['username'])){
header('Location:index.php');
 exit();
}
//include 'db_con.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>practice</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="javascript.js"></script>
       
    </head>
    <body>
        
        <header>
            <nav>
                <div class="practice">
                     <a href="index.php"> HOME</a>
                     <br>
                 <a href="logout.php"> Logout</a>
                 <h2>   PRACTICE </h2>
                 
               </div>
            </nav>
        </header>
          
        <div>
       <center>
           <p></P>
           
           <div class="practice1"> 
                  INSTRUCTIONS:
            <input type="checkbox" id="instr1" name="instr" onclick="showinstr();" ><br>
           
           <textarea rows="4" id="instrtext" style="display: none" >
 1. please  select one of nine reaction types to start the practice
session.


2.To display hint check hint


3. Click product checkbox to know the product

4. click next button to go to next reaction

5.click check button to verify the answer


              </textarea>
            <br>
            <br>
               <!-- to load the page links on same practice.php do as follows-->
               <a href="practice.php ?page=combi2">Combination</a>
          <!--  <input type="checkbox" id="combi" name="combi" onclick="showcombi();" >-->
           
           <br>
           <br>
           <br>
           <a href="practice.php?page=decomposition" >Decomposition</a>
          <!-- <input type="checkbox" id="decom" name="decom" onclick="showdecom();" >-->
           <br>
           <br>
           <br>
           
           <a href="practice.php?page=singlereplacement"> Single-replacement</a>
           <!--<input type="checkbox" id="singre" name="singre" >--->
            
            <br>
            <br>
            <br>
            <a href="practice.php?page=doublereplacement"> Double-replacement</a>
          <!--- <input type="checkbox" id="dbre" name="dbre" >-->
            <br>
           <br>
           <br>
           
           <a href="practice.php?page=oxygenreaction"> Oxygen-reaction</a>
          <!-- <input type="checkbox" id="oxre" name="oxre" >-->
           <br>
           <br>
           <br>
           
           <a href="practice.php?page=waterreaction"> Water-reaction</a>
          <!-- <input type="checkbox" id="ware" name="ware" >-->
           <br>
           <br>
           <br>
           
           <a href="practice.php?page=acidreaction"> Acid-reaction</a>
          <!-- <input type="checkbox" id="acba" name="acba" >-->
           
           <br>
           <br>
           <br>
           <a href="practice.php?page=complexion">Complex ion</a>
          <!-- <input type="checkbox" id="comio" name="comio" >-->
           <br> 
           <br>
           <br>
           
           <a href="practice.php?page=oxidation"> Oxidation/Reduction</a>
         <!--  <input type="checkbox" id="redox" name="redox" >-->
           <br>
           <br>
           <br>
           
           <!-- INSTRUCTIONS:
            <input type="checkbox" id="instr1" name="instr" onclick="showinstr();" ><br>
           
           <textarea rows="4" id="instrtext" style="display: none" >
 1. Select reaction types 
please  select one of nine reaction types to start the practice
sesseion.
2.To display hint check hint


              </textarea>-->
           
    
       
              
       </center>    
           
 
          </div >
    
        <p> <a href="select.php"> GO BACK</a> &nbsp
            <br>
        <a href="periodic.php">Periodic Table</a></P>
        
        <div id="pages">
            <!--code for dynamic page loading-->
        <?php
        if(isset($_GET['page'])){
            $p=$_GET['page'];
            $display=$p.'.php';
            include ($display);
        }else{
            echo "<h2 align=center>'WELCOME TO PRACTICE '</h2>";
        }
        
        
        ?>
        </div>
 
    
          
          
      
        
       <!-- <div id="decomp" style="display:">
            <form id="decomp1">
            <h2 id="header1"> DECOMPOSITION</h2> <br>
            reactant
            <input id="dreac1" name="dreac1" type="text">&nbsp=
            product1
            <input type="text" id="dpro1" name="dpro1">&nbsp+
            product2
            <input type="text" id="dpro1" name="dpro2">
            <br>
      <br>
      <br>
      <br>
      
      <button type="submit" name="submit">SUBMIT</button>
                
                
                
            </form>
            
            
            
            
        </div>-->
          <footer id="instructions">
              <p >
              <!-- INSTRUCTIONS:
               <input type="checkbox" id="instr1" name="instr" onclick="showinstr();" ><br>
           
           <textarea rows="4" id="instrtext" style="display: none" >
 1. Select reaction types ,you can select nine reaction types to start
2.To display hint check hint


              </textarea>
                  
              </p>-->
              
            <!--  <a href="select.php"> GO BACK</a>-->
              
              
            <!---<a href="periodic.php">NEXT</a>--->
          </footer>
          
          
        
  
    </body>
</html>
