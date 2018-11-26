<?php
echo "<html>\n";
echo "<body>\n";

$acidBase= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'HCl',
        'reactant2' => 'NaOH',
        'reactant3' => null,
        'product1' => 'NaCl',
        'product2' => 'H2O',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'H2SO4',
        'reactant2' => 'NaOH',
        'reactant3' => null,
        'product1' => 'Na2SO4',
        'product2' => 'H2O',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'Mg',
        'reactant2' => 'HCl',
        'reactant3' => null,
        'product1' => 'MgCl2',
        'product2' => 'H2',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'Zn',
        'reactant2' => 'HCl',
        'reactant3' => null,
        'product1' => 'ZnCl2',
        'product2' => 'H2',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'Mg',
        'reactant2' => 'H2SO4',
        'reactant3' => null,
        'product1' => 'MgSO4',
        'product2' => 'H2',
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($acidBase as $data) {
    $acid = "INSERT INTO acidBase (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    #echo $acid;
    seven($acid);
    echo "successfully inserted a reaction";
}
?>