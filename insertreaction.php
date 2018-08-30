<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'db_con.php';
$reactant=array(
    array(
        'reactant1'=>'Na2',
        'reactant2'=>'H2O',
        'product1'=>'2NaoH' ,      
    ),
    array(
        'reactant1'=>'2H2',
        'reactant2'=>'O2',
        'product1'=>'2H2O' ,
    ),
    array( 'reactant1'=>'Li',
        'reactant2'=>'O2',
        'product1'=>'Li2O' , ),
    
    array('reactant1'=>'Mg',
        'reactant2'=>'O2',
        'product1'=>'MgO' ,),
    
    array('reactant1'=>'H2',
        'reactant2'=>'Cl2',
        'product1'=>'Hcl' ,),
    
    array('reactant1'=>'NH3',
        'reactant2'=>'Hcl',
        'product1'=>'NH4cl' ,),
    
    array('reactant1'=>'S',
        'reactant2'=>'O2',
        'product1'=>'SO2'  ),
    
    array('reactant1'=>'Ba',
        'reactant2'=>'F2',
        'product1'=>'BaF2'),
    
);

foreach ($reactant as $react) {
  $query="INSERT INTO reactions (reactant1,reactant2,product1)VALUES('$react[reactant1]' ,'$react[reactant2]','$react[product1]')"; 

  queryMysql($query);
  echo 'inserted successfully';
  
}