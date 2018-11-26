<?php
echo "<html>\n";
echo "<body>\n";

$decomposition= array(
    array (
        
        'Rid' => '1',
        'product1' => 'NH3',
        'product2' => null,
        'product3' => null,
        'reactant1' => 'N2',
        'reactant2' => 'H2',
        'reactant3' => null,
    ),
    array (
        
        'Rid' => '2',
        'product1' => 'H2O',
        'product2' => null,
        'product3' => null,
        'reactant1' => 'H2',
        'reactant2' => 'O2',
        'reactant3' => null,
    ),
    array (
        
        'Rid' => '3',
        'product1' => 'HgO',
        'product2' => null,
        'product3' => null,
        'reactant1' => 'Hg',
        'reactant2' => 'O2',
        'reactant3' => null,
    ),
    array (
        
        'Rid' => '4',
        'product1' => 'MgCl2',
        'product2' => null,
        'product3' => null,
        'reactant1' => 'Mg',
        'reactant2' => 'Cl2',
        'reactant3' => null,
    ),
    array (
        
        'Rid' => '5',
        'product1' => 'Al2O3',
        'product2' => null,
        'product3' => null,
        'reactant1' => 'Al',
        'reactant2' => 'O2',
        'reactant3' => null,
    ),
 );
include 'mysql.php';
foreach($decomposition as $data) {
    $dec = "INSERT INTO decomposition (Rid, product1, product2, product3, reactant1, reactant2, reactant3)
	 VALUES ('$data[Rid]', '$data[product1]', '$data[product2]', '$data[product3]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]')";
   #echo $dec;
    tes($dec);
    echo "successfully inserted a reaction";
}
?>