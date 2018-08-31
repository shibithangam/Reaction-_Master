<?php
echo "<html>\n";
echo "<body>\n";

$complexIon= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'H2O2',
        'reactant2' => 'Cl-',
        'reactant3' => null,
        'product1' => 'OCl-',
        'product2' => 'H2O',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'HClO',
        'reactant2' => 'I2',
        'reactant3' => 'H2O',
        'product1' => 'HCl',
        'product2' => 'HIO3',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'BaCl2',
        'reactant2' => 'H2SO4',
        'reactant3' => null,
        'product1' => 'BaSO4',
        'product2' => 'HCl',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'CuSO4',
        'reactant2' => null,
        'reactant3' => null,
        'product1' => 'Cu2+',
        'product2' => 'SO4 2-',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'Cu',
        'reactant2' => 'AgCl',
        'reactant3' => null,
        'product1' => 'CuCl',
        'product2' => 'Ag',
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($complexIon as $data) {
    $comp = "INSERT INTO complexIon (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    #echo $comp;
    eight($comp);
    echo "successfully inserted a reaction";
}
?>