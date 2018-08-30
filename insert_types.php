<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'db_con.php';
$types=array(
  array(
     ' type'=>'true',
      'id'=>2,
  ),  
    array(
     ' type'=>'true',
      'id'=>3,
  ),  
     array(
     ' type'=>'true',
      'id'=>4,
  ),
      array(
     ' type'=>'true',
      'id'=>5,
  ),
      array(
     ' type'=>'true',
      'id'=>6,
  ),
      array(
     ' type'=>'true',
      'id'=>7,
  ),
      array(
     ' type'=>'true',
      'id'=>8,
  ),
      array(
     ' type'=>'true',
      'id'=>9,
  ),
);
foreach ($types as $type){ 
    $query="INSERT INTO reaction_type (combination,reac_id) VALUES ('$type[type]','$type[id]')";
    queryMysql($query);
    echo 'inserted';
    
}
