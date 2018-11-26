<?php
echo "<html>\n";
echo "<body>\n";

$singleReplace= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'H2',
        'reactant2' => 'FeO',
        'reactant3' => null,
        'product1' => 'H2O',
        'product2' => 'Fe',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'Pb',
        'reactant2' => 'Ag+',
        'reactant3' => null,
        'product1' => 'Pb2+',
        'product2' => 'Ag',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'Mg',
        'reactant2' => 'Ag+',
        'reactant3' => null,
        'product1' => 'Mg2+',
        'product2' => 'Ag',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'Na',
        'reactant2' => 'HOH',
        'reactant3' => null,
        'product1' => 'H2',
        'product2' => 'Na+',
        'product3' => 'OH-',
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'Ca',
        'reactant2' => 'H+',
        'reactant3' => null,
        'product1' => 'Ca2+',
        'product2' => 'H2',
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($singleReplace as $data) {
    $sin = "INSERT INTO singleReplace (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
   #echo $sin;
    third($sin);
    echo "successfully inserted a reaction";
}
?>