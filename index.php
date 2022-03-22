<?php

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/classes/GuestUser.php';
require_once __DIR__ . '/classes/RegisteredUser.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Address.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Toy.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Flea.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Shop</title>
</head>
<body>
    <header>
        <h1>pet shop</h1>
    </header>

    <main>
        <div class="user">
            <?php
                $registeredUser = new RegisteredUser('Marianna', 'Galuppi', 'marianna@galuppi.it');
                $registeredUser->setPhoneNumber('3131313131');
                $userCreditCard = new CreditCard('Marianna Galuppi', '9292929292929292', '03', '25', '818');
                $registeredUser->setCreditCard($userCreditCard);
                $userAddress = new Address('Via del matto', '99', '25128', 'Milano', 'Italia');
                $registeredUser->setAddress($userAddress);
                // var_dump($registeredUser);

                echo "<h2>utente registrato</h2>";
                echo "<strong>Nome: </strong><span>{$registeredUser->getFirstName()}</span>";
                echo "<br>";
                echo "<strong>Cognome: </strong><span>{$registeredUser->getLastName()}</span>";
                echo "<br>";
                echo "<strong>Nickname: </strong><span>{$registeredUser->getNickName()}</span>";
                echo "<br>";
                echo "<strong>Indirizzo: </strong><span>{$registeredUser->address->getFullAddress()}</span>";
                echo "<br>";
                echo "<strong>Sconto applicabile: </strong><span class='green'>{$registeredUser->getDiscount()}%</span>";

                /*
                    if($creditCard->isExpired()) {
                        echo '<br>carta scaduta';
                    } else {
                        echo '<br>carta valida';
                    }
                */
            ?> 
        </div>


        <div class="products">
            <?php
                foreach($products as $key => $animals) {
                    if($key == 'dogs') {
                        echo "<h2>Prodotti per cani:</h2>";
                        foreach($animals as $key => $products) {
                            // if($key == "toys") {
                            //     foreach($products as $toy) {
                            //         // creo nuovo oggetto gioco
                            //         ${"toy" . ($key)} = new Toy($toy["productName"], $toy["productCategory"], $productCategories, $toy["pet"], $pets, $toy["price"], $toy["quantity"]);
                            //         // setto la categoria gioco
                            //         ${"toy" . ($key)}->setToyCategory($toy["toyCategory"], $toyCategories);
                            //         // aggiungo i materiali
                            //         foreach($toy["materials"] as $material) {
                            //             ${"toy" . ($key)}->addMaterial($material, $toyMaterials);
                            //         }
                            //         var_dump(${"toy" . ($key)});
                            //     }
                            // }
                            if($key == "foods") {
                                foreach($products as $food) {
                                    // creo nuovo oggetto cibo
                                    ${"food" . ($key)} = new Food($food["productName"], $food["productCategory"], $productCategories, $food["pet"], $pets, $food["price"], $food["quantity"]);
                                    // setto la categoria cibo
                                    ${"food" . ($key)}->setFoodCategory($food["foodCategory"], $foodCategories);
                                    // aggiungo le età
                                    foreach($food["lifeStages"] as $lifeStage) {
                                        ${"food" . ($key)}->addLifeStage($lifeStage, $lifeStages);
                                    }
                                    var_dump(${"food" . ($key)});
                                }
                            }
                            if($key == "fleas") {
                                foreach($products as $flea) {
                                    // creo nuovo oggetto antipulci
                                    ${"flea" . ($key)} = new Flea($flea["productName"], $flea["productCategory"], $productCategories, $flea["pet"], $pets, $flea["price"], $flea["quantity"]);
                                    // setto la categoria antipulci
                                    ${"flea" . ($key)}->setFleaCategory($flea["fleaCategory"], $fleaCategories);
                                    // aggiungo le disponibilità mensili
                                    foreach($flea["monthlyAvailability"] as $month) {
                                        ${"flea" . ($key)}->addMonthlyAvailability($month, $months);
                                    }
                                    var_dump(${"flea" . ($key)});
                                }
                            }
                        }
                    }
                    if($key == 'cats') {
                        echo "<h2>Prodotti per gatti:</h2>";
                        foreach($animals as $key => $products) {
                            // if($key == "toys") {
                            //     foreach($products as $toy) {
                            //         // creo nuovo oggetto gioco
                            //         ${"toy" . ($key)} = new Toy($toy["productName"], $toy["productCategory"], $productCategories, $toy["pet"], $pets, $toy["price"], $toy["quantity"]);
                            //         // setto la categoria gioco
                            //         ${"toy" . ($key)}->setToyCategory($toy["toyCategory"], $toyCategories);
                            //         // aggiungo i materiali
                            //         foreach($toy["materials"] as $material) {
                            //             ${"toy" . ($key)}->addMaterial($material, $toyMaterials);
                            //         }
                            //         var_dump(${"toy" . ($key)});
                            //     }
                            // }
                            if($key == "foods") {
                                foreach($products as $food) {
                                    // creo nuovo oggetto cibo
                                    ${"food" . ($key)} = new Food($food["productName"], $food["productCategory"], $productCategories, $food["pet"], $pets, $food["price"], $food["quantity"]);
                                    // setto la categoria cibo
                                    ${"food" . ($key)}->setFoodCategory($food["foodCategory"], $foodCategories);
                                    // aggiungo le età
                                    foreach($food["lifeStages"] as $lifeStage) {
                                        ${"food" . ($key)}->addLifeStage($lifeStage, $lifeStages);
                                    }
                                    var_dump(${"food" . ($key)});
                                }
                            }
                            if($key == "fleas") {
                                foreach($products as $flea) {
                                    // creo nuovo oggetto antipulci
                                    ${"flea" . ($key)} = new Flea($flea["productName"], $flea["productCategory"], $productCategories, $flea["pet"], $pets, $flea["price"], $flea["quantity"]);
                                    // setto la categoria antipulci
                                    ${"flea" . ($key)}->setFleaCategory($flea["fleaCategory"], $fleaCategories);
                                    // aggiungo le disponibilità mensili
                                    foreach($flea["monthlyAvailability"] as $month) {
                                        ${"flea" . ($key)}->addMonthlyAvailability($month, $months);
                                    }
                                    var_dump(${"flea" . ($key)});
                                }
                            }
                        }
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>