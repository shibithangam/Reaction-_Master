<?php
echo "<html>\n";
echo "<body>\n";

$doubleReplace= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'H+',
        'reactant2' => 'OH-',
        'reactant3' => null,
        'product1' => 'H2O',
        'product2' => null,
        'product3' => null,
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'H+',
        'reactant2' => 'F-',
        'reactant3' => null,
        'product1' => 'HF',
        'product2' => null,
        'product3' => null,
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'H+',
        'reactant2' => 'MnS',
        'reactant3' => null,
        'product1' => 'H2S',
        'product2' => 'Mn2+',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'OH-',
        'reactant2' => 'NH4+',
        'reactant3' => null,
        'product1' => 'H2O',
        'product2' => 'NH3',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'Ni2+',
        'reactant2' => 'HS-',
        'reactant3' => null,
        'product1' => 'NiS',
        'product2' => 'H+',
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($doubleReplace as $data) {
    $dou = "INSERT INTO doubleReplace (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    #echo $dou;
    four($dou);
    echo "successfully inserted a reaction";
}
?>