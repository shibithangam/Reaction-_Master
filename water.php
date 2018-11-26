<?php
echo "<html>\n";
echo "<body>\n";

$water= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'Li',
        'reactant2' => 'H2O',
        'reactant3' => null,
        'product1' => 'Li+',
        'product2' => 'HO-',
        'product3' => 'H2',
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'Na',
        'reactant2' => 'H2O',
        'reactant3' => null,
        'product1' => 'Na+',
        'product2' => 'HO-',
        'product3' => 'H2',
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'K',
        'reactant2' => 'H2O',
        'reactant3' => null,
        'product1' => 'K+',
        'product2' => 'HO-',
        'product3' => 'H2',
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'CO2',
        'reactant2' => 'H2O',
        'reactant3' => null,
        'product1' => 'H2CO3',
        'product2' => null,
        'product3' => null,
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'HCl',
        'reactant2' => 'H2O',
        'reactant3' => null,
        'product1' => 'H3O+',
        'product2' => 'Cl-',
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($water as $data) {
    $wat = "INSERT INTO water (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    #echo $wat;
    six($wat);
    echo "successfully inserted a reaction";
}
?>