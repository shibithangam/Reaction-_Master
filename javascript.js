/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    function showinstr(){
     if(document.getElementById('instr1').checked==false){
        document.getElementById('instrtext').style.display="none";
    }else{
       document.getElementById('instrtext').style.display="block";
    }
}

function showhint(){
    if(document.getElementById('hint1').checked==false){
        document.getElementById('com').style.display="none";
    }else{
        document.getElementById('com').style.display="block";
    }
}

function showhint1(){
    if(document.getElementById('hint2').checked==false){
        document.getElementById('com1').style.display="none";
    }else{
        document.getElementById('com1').style.display="block";
    }
}

function showhint2(){
    if(document.getElementById('hint3').checked==false){
        document.getElementById('com2').style.display="none";
    }else{
        document.getElementById('com2').style.display="block";
    }
}
function showhint3(){
    if(document.getElementById('hint4').checked==false){
        document.getElementById('com3').style.display="none";
    }else{
        document.getElementById('com3').style.display="block";
    }
}
function showhint4(){
    if(document.getElementById('hint5').checked==false){
        document.getElementById('com4').style.display="none";
    }else{
        document.getElementById('com4').style.display="block";
    }
}
function showcombi(){
    if( document.getElementById('combi').checked==true){
        document.getElementById('practice2').style.display="block";
        document.getElementById('decomp').style.display="none";
        //document.getElementById('practice2').style.display="block";
        
    }else{
      //document.getElementById('practice2').style.display="block";
      //document.getElementById('decomp').style.display="none";
    }
        
}
function showdecom(){
    if( document.getElementById('decom').checked==false){
        //document.getElementById('practice2').style.display="none";
        document.getElementById('decomp').style.display="none";
        
    }else{
      //document.getElementById('practice2').style.display="none";
      document.getElementById('decomp').style.display="block";
    }
        
}

function changecolor(){
    var nonmetal=document.getElementById(non-metal);
    if(nonmetal.childnodes[0].cheched===true){
        document.getElementById(nm1).style.color="orange";
    }else{
       document.getElementById(nm1).style.color=""; 
    }
}

function shownonmetal(){
    if(document.getElementById('non-metal').checked==false){
        document.getElementById('nonmetalre1').style.display="none";
    }else{
        document.getElementById('nonmetalre1').style.display="block";
    }
}
function showmetal(){
    if(document.getElementById('metal').checked==false){
        document.getElementById('nonmetalre2').style.display="none";
    }else{
        document.getElementById('nonmetalre2').style.display="block";
    }
}
function showmetalloid(){
    if(document.getElementById('metalloid').checked==false){
        document.getElementById('nonmetalre3').style.display="none";
    }else{
        document.getElementById('nonmetalre3').style.display="block";
    }
}
function shownobelgas(){
    if(document.getElementById('nobel-gas').checked==false){
        document.getElementById('nonmetalre4').style.display="none";
    }else{
        document.getElementById('nonmetalre4').style.display="block";
    }
}
function showinstr1(){
     if(document.getElementById('periin').checked==false){
        document.getElementById('font').style.display="none";
    }else{
       document.getElementById('font').style.display="block";
    }}
function showpro(){
  if(document.getElementById('proch').checked==false){
      document.getElementById('chep').style.display='none';
  } else{
    document.getElementById('chep').style.display='block';  
  } 
    
}

function add($count){
  count++
  document.getElementById('display').innerHTML = count;
    
}
function onmouseover(){ 
if(document.getElementById('mouseover').style.display=='none'){
    document.getElementById('mouseover').style.display=='block';
}else{
    document.getElementById('mouseover').style.display=='none';
}
    
}


function myFunction() {
    var x = document.getElementById("word");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }}

