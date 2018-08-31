<?php
echo "<html>\n";
echo "<body>\n";

$combination = array(
    array(
        'Rid' => '1',
        'reactant1' => 'N2',
        'reactant2' => 'H2',
        'reactant3' => null,
        'product1' => 'NH3',
        'product2' => null,
        'product3' => null
    ),
    array(
        
        'Rid' => '2',
        'reactant1' => 'Mg',
        'reactant2' => 'O2',
        'reactant3' => null,
        'product1' => 'MgO',
        'product2' => null,
        'product3' => null
    ),
    array(
        
        'Rid' => '3',
        'reactant1' => 'N2',
        'reactant2' => 'O2',
        'reactant3' => null,
        'product1' => 'N2O',
        'product2' => null,
        'product3' => null
    ),
    array(
        
        'Rid' => '4',
        'reactant1' => 'Na',
        'reactant2' => 'Cl2',
        'reactant3' => null,
        'product1' => 'NaCl',
        'product2' => null,
        'product3' => null
    ),
    array(
        
        'Rid' => '5',
        'reactant1' => 'H2',
        'reactant2' => 'O2',
        'reactant3' => null,
        'product1' => 'H2O',
        'product2' => null,
        'product3' => null
    )
);
include 'mysql.php';
foreach ($combination as $data) {
    $query = "INSERT INTO combination (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    // echo $query;
    retrieve($query);
    echo "successfully inserted a reaction";
}
?>