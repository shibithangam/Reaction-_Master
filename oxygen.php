<?php
echo "<html>\n";
echo "<body>\n";

$oxygen= array(
    array (
        'Rid' =>'1',
        'reactant1' => 'H2S',
        'reactant2' => 'O2',
        'reactant3' => null,
        'product1' => 'HS',
        'product2' => 'OH',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'2',
        'reactant1' => 'HS',
        'reactant2' => 'OH',
        'reactant3' => 'O2',
        'product1' => 'SO2',
        'product2' => 'H2O',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'3',
        'reactant1' => 'H2S',
        'reactant2' => 'O3',
        'reactant3' => null,
        'product1' => 'SO2',
        'product2' => 'H2O',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'4',
        'reactant1' => 'N2O',
        'reactant2' => 'O3',
        'reactant3' => null,
        'product1' => 'NO2',
        'product2' => 'O2',
        'product3' => null,
    ),
    array (
        
        'Rid' =>'5',
        'reactant1' => 'O3',
        'reactant2' => 'O',
        'reactant3' => null,
        'product1' => 'O2',
        'product2' => null,
        'product3' => null,
    ),
);
include 'mysql.php';
foreach($oxygen as $data) {
    $oxy = "INSERT INTO oxygen (Rid, reactant1, reactant2, reactant3, product1, product2, product3)
	 VALUES ('$data[Rid]', '$data[reactant1]', '$data[reactant2]', '$data[reactant3]', '$data[product1]', '$data[product2]', '$data[product3]')";
    #echo $oxy;
    five($oxy);
   # echo "successfully inserted a reaction";
}
?>