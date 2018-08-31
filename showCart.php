
<?php
echo "<html>\n";
echo "<body>\n";
// (id,(name,qty,price))

$products = array(
    "0" => array(
        "name" => "IphoneX 32GB",
        "qty" => "10",
        "price" => "800"
    ),
    "1" => array(
        "name" => "IphoneX 128GB",
        "qty" => "5",
        "price" => "1000"
    ),
    "2" => array(
        "name" => "Iphone8Plus 32GB",
        "qty" => "10",
        "price" => "700"
    ),
    "3" => array(
        "name" => "Iphone8Plus 64GB",
        "qty" => "10",
        "price" => "800"
    ),
    "4" => array(
        "name" => "Samsung S9 64GB",
        "qty" => "10",
        "price" => "700"
    ),
    "5" => array(
        "name" => "PixelXL 128GB",
        "qty" => "10",
        "price" => "900"
    ),
    "6" => array(
        "name" => "PixelXL2 128GB",
        "qty" => "20",
        "price" => "1200"
    ),
    "7" => array(
        "name" => "Iphone8 128GB",
        "qty" => "10",
        "price" => "700"
    ),
    "8" => array(
        "name" => "anker power bank",
        "qty" => "3",
        "price" => "60"
    ),
    '9' => array(
        'name' => "logo power bank",
        'qty' => "10",
        'price' => "35"
    )
);

//wrirte function display and print the output accordingly
//if you do not want o/p as html then remove all the tags ans check the output - check in chrome
// properly use echo statements and add more products if u need

echo "<pre>\n";
foreach ($products as $id => $items)
    foreach ($items as $key => $value)
        echo "$id:\t$key\t($value)<br>\n";
echo "</pre>\n";
echo "</body>\n";
echo "</html>\n";
?> 