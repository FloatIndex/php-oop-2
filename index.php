<?php

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/classes/GuestUser.php';
require_once __DIR__ . '/classes/RegisteredUser.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Address.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Toy.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/FleaAndTick.php';

$registeredUser = new RegisteredUser('Marianna', 'Galuppi', 'marianna@galuppi.it');
$registeredUser->setPhoneNumber('3131313131');
$userCreditCard = new CreditCard('Marianna Galuppi', '9292929292929292', '03', '25', '818');
$registeredUser->setCreditCard($userCreditCard);
$userAddress = new Address('Via del matto', '99', '25128', 'Milano', 'Italia');
$registeredUser->setAddress($userAddress);
var_dump($registeredUser);

/*
if($creditCard->isExpired()) {
    echo '<br>carta scaduta';
} else {
    echo '<br>carta valida';
}
*/

foreach($products as $key => $animals) {
    if($key == 'dogs') {
        echo "<h2>Prodotti per cani:</h2>";
        foreach($animals as $key => $products) {
            if($key == "toys") {
                foreach($products as $toy) {
                    // var_dump($toy);
                    // echo $products['brand'];
                    ${"toy" . ($key)} = new Toy($toy["productName"], $toy["productCategory"], $productCategories, $toy["pet"], $pets, $toy["price"], $toy["quantity"]);
                    ${"toy" . ($key)}->setToyCategory($toy["toyCategory"], $toyCategories);
                    foreach($toy["materials"] as $material) {
                        ${"toy" . ($key)}->addMaterial($material, $toyMaterials);
                    }
                    var_dump(${"toy" . ($key)});
                }
            }
        }
    }
    if($key == 'cat') {
        echo "<h2>Prodotti per gatti:</h2>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    
</body>
</html>