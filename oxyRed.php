<?php
echo "<html>\n";
echo "<body>\n";

$oxyRed= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'Na',
        'reactant2' => 'Cl',
        'reactant3' => null,
        'product1' => 'Na+',
        'product2' => 'Cl-',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'Fe2O3',
        'reactant2' => 'CO',
        'reactant3' => null,
        'product1' => 'Fe',
        'product2' => 'CO2',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'MnO2',
        'reactant2' => 'HCl',
        'reactant3' => null,
        'product1' => 'MnCl2',
        'product2' => 'Cl2',
        'product3' => 'H2O',
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'CH4',
        'reactant2' => 'O2',
        'reactant3' => null,
        'product1' => 'CO2',
        'product2' => 'H2O',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'Fe',
        'reactant2' => 'O2',
        'reactant3' => null,
        'product1' => 'Fe2O3',
        'product2' => null,
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($oxyRed as $data) {
    $oxy = "INSERT INTO oxyRed (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    #echo $oxy;
    nine($oxy);
    echo "successfully inserted a reaction";
}
?>