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
include 'db_con.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
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
                 <h2> PERIODIC TABLE  </h2>
                 <p> <a href="select.php"> GO BACK</a> </P><br><br>
                 <?php
                        $query="select * from elements where element_type= 'non-metal'";
          $ret=queryMysql($query);
        
          while($row= mysqli_fetch_array($ret)){
        $resultele=$row['name'];
       
        //echo ("<th >" .$resultele."</th>");
       
         
       
          };
                     $query="select * from elements where element_type= 'metal'";
          $ret=queryMysql($query);
        
          while($row= mysqli_fetch_array($ret)){
        $resultele1=$row['name'];
       
        //echo ("<th >" .$resultele1."</th>");
       
         
       
          };
                   $query="select * from elements where element_type= 'metalloid'";
          $ret=queryMysql($query);
        
          while($row= mysqli_fetch_array($ret)){
        $resultele2=$row['name'];
       
        //echo ("<th >" .$resultele2."</th>");
       
         
       
          };
                 $query="select * from elements where element_type= 'nobelgas'";
          $ret=queryMysql($query);
        
          while($row= mysqli_fetch_array($ret)){
        $resultele3=$row['name'];
       
        //echo ("<th >" .$resultele3."</th>");
       
         
       
          };
         
       
    

                 ?>
                
                 <p class="etypes">
                     <label for="opt-in" id="label"> NON-METAL:</label>
                     <input type="checkbox" id="non-metal" name="non-metal" onclick="shownonmetal();"><br>
                     <textarea  ROWS=12 id='nonmetalre1' style="display: none" >Hydrogen
Carbon
Nitrogen
Oxygen
Flourine
Silicon
Phosphorus
Sulphur
Chlorine
Selenium
Bromine
Iodine
                </textarea><br><br>
                     <label for="opt-in" id="label"> METAL:</label>
                     <input type="checkbox" id="metal" name="metal" onclick="showmetal();"><br><br>
                     <textarea ROWS=12 id='nonmetalre2' style="display: none">Lithium
Beryllium
Sodium
Magnesium
Aluminium
Potassium
Calcium
Iron
Copper
Zinc
Silver
Tungsten
Platinum
Gold
Mercury
Lead
Scandium
Titanium
Vandanium
Chromium
Magnese
Cobalt
Nickel
Gallium
Rubidium
Strontium
Yttrium
Zirconium
Niobium
Molybdenum
Technetium
Ruthenium
Rhodium
Palladium
Cadmium
Indium
Tin
Cesium
Barium
Lanthanum
Hafnium
Tantalum
Rhenium
Osmium
Iridium
Thallium
Bismuth
Francium
Radium
Actinium
Rutherfordium
Dubnium
Seaborgium
Bohrium
Hassium
Meitnreium
Darmstadtium
Roentgenium
Copernicium
Nihonium
Flerovium
Moscovium
Livermorium 
                </textarea><br><br>
                     <label for="opt-in" id="label"> METALLOID:</label>
                     <input type="checkbox" id="metalloid" name="metalloid" onclick="showmetalloid();"><br><br>
                     <textarea ROWS=8 id='nonmetalre3' style="display: none">Boron
Germanium
Arsenic
Antimony
Tellurium
Polonium
Astatine
Tennessine
                </textarea><br><br>
                     <label for="opt-in" id="label"> NOBEL GAS:</label>
                     <input type="checkbox" id="nobel-gas" name="nobel-gas" onclick="shownobelgas();"><br><br>
                     <textarea ROWS=8 id='nonmetalre4' style="display: none">Helium
Neon
argon
Krypton
Xenon
Radon
Oganesson
                </textarea><br><br>
                     
                 </p>
                 
               </div>
            </nav>
        </header>
        <div id="periodic" style="display: ">
            <img src="frontpage.png" width="800" height="400">
        
            
        </div>
        <div class='elements'>
            <form id='ele1' action='' method="post">
                <label for="elem1"> ELEMENT NAME:</label>
                <input type="text" name="elename" placeholder="element name"><br>
               <!-- instructions:
                <input type="checkbox" id="periin" name="periin" onclick="showinstr1();">
                <font id="font" style="display: none">The Elements name should start with capital</font>-->
                <br><br>
                <button type="submit" name="submit"> SUBMIT</button>
                
            </form>
            
        </div>

        
    </body>
</html>
 <?php
if( isset($_POST['submit'])){
 $elements=$_POST['elename'] ; 
 //to make the data from db not case sensitive
 $ele= strtolower($elements);
 $query= "select * from elements where name='$ele'";
 //displaying the elements result in a table
 echo "<table border='1' align=right>
<tr>
<th>Atomic No</th>
<th>Symbol</th>
<th>Atomic weight</th>
<th>Element type</th>
</tr>";
 $result= queryMysql($query);
  while($row= mysqli_fetch_array($result, MYSQL_ASSOC)){
   $atomicno=$row['atomic_number'];
   $symbol=$row['symbol'];
   $atomicwei=$row['atomic_weight'];
   $type=$row['element_type'];
   echo "<tr>";
  echo "<td>" . $atomicno . "</td>";
  echo "<td>" . $symbol . "</td>";
  echo "<td>" . $atomicwei . "</td>";
  echo "<td>" . $type . "</td>";
   
  }
echo "</table>"; 
    
    
}



?>

