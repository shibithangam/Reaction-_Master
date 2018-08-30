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
        <title>Home</title>
       <script>   
            function showhide(){
             if(document.getElementById('inst').checked=true){
        document.getElementById('domo').style.display=="block";
    }else{
       document.getElementById('demo').style.display=="none";
    } }  
     </script>
    </head>
    <body>
        
        <p>
           instruction:
           <input type="checkbox" id="inst"  name="textbox">
    <!-- <textarea rows="4" id="instrtext" style="display: none">
 1. Select reaction types ,you can select 9reaction types
2.To display hint check hint
</textarea>-->
        </p>
        <p id="demo" style="display: none">text visible</p>
        
     
    </body>
</html>