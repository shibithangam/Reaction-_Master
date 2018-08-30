<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'db_con.php';
$hints=array(
    array(
      'hints'=>'Sodium oxide is combined with water gives Sodium hydroxide',
       'equation'=>'sodium oxide is combined with water',
        'id'=>2,
        
    ),
    
    array(
      'hints'=>'Hydrogen is burned in air or oxygen produces water',
       'equation'=>'Hydrogen is burned in air or oxygen',
        'id'=>3,
        
    ),
      array(
      'hints'=>'Lithium is combined with oxygen to form lithium oxide',
       'equation'=>'Lithium is combined with oxygen',
        'id'=>4,
        
    ),
      array(
      'hints'=>'Magnesium is combined with oxygen to form Magnesium oxide',
       'equation'=>'Magnesium is combined with oxygen',
        'id'=>5,
        
    ),
      array(
      'hints'=>'Hydrogen is combined with chlorine to form Hydrochloride',
       'equation'=>'Hydrogen is combined with chlorine',
        'id'=>6,
        
    ),
      array(
      'hints'=>'Colourless ammonia is added to colorless hydrogenchloride give ammonia chloride',
       'equation'=>'Colourless ammonia is added to colorless hydrogenchloride',
        'id'=>7,
        
    ),
     array(
      'hints'=>'Sulphur is burned inthe air to produce sulphur oxide',
       'equation'=>'Sulphur is burned inthe air ',
        'id'=>8,
        
    ),
     array(
      'hints'=>'Barium metal and flurine gas is combined to produce salt barium fluroide',
       'equation'=>'Barium metal and flurine gas is combined',
        'id'=>9,
        
    ),
);

foreach ($hints as $hint) {
    $query= "INSERT INTO hints(hints,word_equations,rea_id) VALUES('$hint[hints]','$hint[equation]','$hint[id]')";
    queryMysql($query);
    echo 'inserted';
}