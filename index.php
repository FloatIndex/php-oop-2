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
    <title>Pet Shop</title>
</head>
<body>
    <header>
        <h1>pet shop</h1>
    </header>
    
    <main>
        <div class="user">
            <?php
                $user = new RegisteredUser('Marianna', 'Galuppi', 'marianna@galuppi.it');
                $user->setPhoneNumber('3131313131');
                $userCreditCard = new CreditCard('Marianna Galuppi', '9292929292929292', '03', '25', '818');
                $user->setCreditCard($userCreditCard);
                $userAddress = new Address('Via del matto', '99', '25128', 'Milano', 'Italia');
                $user->setAddress($userAddress);

                if($user->getRegistered()) {
                    echo "<h2>utente registrato</h2>";
                } else {
                    echo "<h2>utente ospite</h2>";
                }
                echo "<strong>Nome: </strong><span>{$user->getFirstName()}</span>";
                echo "<br>";
                echo "<strong>Cognome: </strong><span>{$user->getLastName()}</span>";
                echo "<br>";
                echo "<strong>Nickname: </strong><span>{$user->getNickName()}</span>";
                echo "<br>";
                echo "<strong>Indirizzo: </strong><span>{$user->address->getFullAddress()}</span>";
                echo "<br>";
                echo "<strong>Sconto applicabile: </strong><span class='green'>{$user->getDiscount()}%</span>";

                if($userCreditCard->isExpired()) {
                    echo "<p><strong class='red card-validation'>carta scaduta</strong></p>";
                } else {
                    echo "<p><strong class='green card-validation'>carta valida</strong></p>";
                }
            ?> 
        </div>


        <div class="products">
            <?php
                foreach($products as $key => $productCategory) {
                    if($key == 'toys') {
                        echo "<h3>giochi</h3>";
                        foreach($productCategory as $product) {
                            $toy = new Toy($product['productName'], $product['productCategory'], $productCategories, $product['pet'], $pets, $product['price'], $product['quantity']);
                            $toy->setBrand($product['brand']);
                            $toy->setToyCategory($product['toyCategory'], $toyCategories);
                            foreach($product['materials'] as $material) {
                                $toy->addMaterial($material, $toyMaterials);
                            }
                            echo "<p class='product-info'><strong>Nome: </strong><span>" . $toy->getProductName() . "</span></p>";
                            echo "<p class='product-info'><strong>Brand: </strong><span>" . $toy->getBrand() . "</span></p>";
                            echo "<p class='product-info'><strong>Pet: </strong><span>" . $toy->getPet() . "</span></p>";
                            echo "<p class='product-info'><strong>Categoria: </strong><span>" . $toy->getProductCategory() . "</span></p>";
                            echo "<p class='product-info'><strong>Tipo: </strong><span>" . $toy->getToyCategory() . "</span></p>";
                            
                            // inizio aggiunta materiali
                            echo "<p class='product-info'><strong>Materiali: </strong><span>";
                            foreach($toy->getMaterials() as $material) {
                                echo "$material ";
                            }
                            echo "</span></p>";
                            // fine aggiunta materiali
                
                            // inizio set prezzo (sconto su utente registrato)
                            if($user->getRegistered()) {
                                $notDiscounted = $toy->getPrice();
                                $discount = $user->getDiscount();
                                $discounted = $notDiscounted - ($notDiscounted * $discount / 100);
                                $toy->setPrice(round($discounted, 2));
                                echo "<p class='product-info'><strong>Prezzo: </strong><del class='red'>$notDiscounted</del><span> " . $toy->getPrice() . " &euro;</span></p>";
                            } else {
                                echo "<p class='product-info'><strong>Prezzo: </strong><span>" . $toy->getPrice() . " &euro;</span></p>";
                            }
                            // fine set prezzo
                            
                            // diversi stili e output quantità
                            if($toy->getQuantity() < 20) {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='red'>" . $toy->getQuantity() . " (in esaurimento)</span></p>";
                            } else if($toy->getQuantity() >= 20 && $toy->getQuantity() < 200) {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='green'>" . $toy->getQuantity() . "</span></p>";
                            } else {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='green'>200+</span><br>";
                            }
                            echo "<br>";
                        }
                    }
                    if($key == 'foods') {
                        echo "<h3>cibo</h3>";
                        foreach($productCategory as $product) {
                            $food = new Food($product['productName'], $product['productCategory'], $productCategories, $product['pet'], $pets, $product['price'], $product['quantity']);
                            $food->setBrand($product['brand']);
                            $food->setFoodCategory($product['foodCategory'], $foodCategories);
                            foreach($product['lifeStages'] as $lifeStage) {
                                $food->addLifeStage($lifeStage, $lifeStages);
                            }
                            echo "<p class='product-info'><strong>Nome: </strong><span>" . $food->getProductName() . "</span></p>";
                            echo "<p class='product-info'><strong>Brand: </strong><span>" . $food->getBrand() . "</span></p>";
                            echo "<p class='product-info'><strong>Pet: </strong><span>" . $food->getPet() . "</span></p>";
                            echo "<p class='product-info'><strong>Categoria: </strong><span>" . $food->getProductCategory() . "</span></p>";
                            echo "<p class='product-info'><strong>Tipo: </strong><span>" . $food->getFoodCategory() . "</span></p>";
                            
                            // inizio aggiunta età
                            echo "<p class='product-info'><strong>Età: </strong><span>";
                            foreach($food->getLifeStages() as $lifeStage) {
                                echo "$lifeStage ";
                            }
                            echo "</span></p>";
                            // fine aggiunta età
                
                            echo "<p class='product-info'><strong>Peso: </strong><span>" . $food->getWeight() . "</span></p>";
                
                            // inizio set prezzo (sconto su utente registrato)
                            if($user->getRegistered()) {
                                $notDiscounted = $food->getPrice();
                                $discount = $user->getDiscount();
                                $discounted = $notDiscounted - ($notDiscounted * $discount / 100);
                                $food->setPrice(round($discounted, 2));
                                echo "<p class='product-info'><strong>Prezzo: </strong><del class='red'>$notDiscounted</del><span> " . $toy->getPrice() . " &euro;</span></p>";
                            } else {
                                echo "<p class='product-info'><strong>Prezzo: </strong><span>" . $food->getPrice() . " &euro;</span></p>";
                            }
                            // fine set prezzo
                            
                            // diversi stili e output quantità
                            if($food->getQuantity() < 20) {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='red'>" . $food->getQuantity() . " (in esaurimento)</span></p>";
                            } else if($food->getQuantity() >= 20 && $food->getQuantity() < 200) {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='green'>" . $food->getQuantity() . "</span></p>";
                            } else {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='green'>200+</span><br>";
                            }
                            echo "<br>";
                        }
                    }
                    if($key == 'fleas') {
                        echo "<h3>antipulci</h3>";
                        foreach($productCategory as $product) {
                            $flea = new Flea($product['productName'], $product['productCategory'], $productCategories, $product['pet'], $pets, $product['price'], $product['quantity']);
                            $flea->setBrand($product['brand']);
                            $flea->setFleaCategory($product['fleaCategory'], $fleaCategories);
                            foreach($product['monthlyAvailability'] as $month) {
                                $flea->addMonthlyAvailability($month, $months);
                            }
                            echo "<p class='product-info'><strong>Nome: </strong><span>" . $flea->getProductName() . "</span></p>";
                            echo "<p class='product-info'><strong>Brand: </strong><span>" . $flea->getBrand() . "</span></p>";
                            echo "<p class='product-info'><strong>Pet: </strong><span>" . $flea->getPet() . "</span></p>";
                            echo "<p class='product-info'><strong>Categoria: </strong><span>" . $flea->getProductCategory() . "</span></p>";
                            echo "<p class='product-info'><strong>Tipo: </strong><span>" . $flea->getFleaCategory() . "</span></p>";
                            
                            // inizio aggiunta mesi di disponibilità
                            echo "<p class='product-info'><strong>Disponibilità: </strong><span>";
                            foreach($flea->getMonthlyAvailability() as $month) {
                                echo "$month ";
                            }
                            echo "</span></p>";
                            // fine aggiunta mesi
                
                            // inizio set prezzo (sconto su utente registrato)
                            if($user->getRegistered()) {
                                $notDiscounted = $flea->getPrice();
                                $discount = $user->getDiscount();
                                $discounted = $notDiscounted - ($notDiscounted * $discount / 100);
                                $flea->setPrice(round($discounted, 2));
                                echo "<p class='product-info'><strong>Prezzo: </strong><del class='red'>$notDiscounted</del><span> " . $toy->getPrice() . " &euro;</span></p>";
                            } else {
                                echo "<p class='product-info'><strong>Prezzo: </strong><span>" . $flea->getPrice() . " &euro;</span></p>";
                            }
                            // fine set prezzo
                            
                            // diversi stili e output quantità
                            if($flea->getQuantity() < 20) {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='red'>" . $flea->getQuantity() . " (in esaurimento)</span></p>";
                            } else if($flea->getQuantity() >= 20 && $flea->getQuantity() < 200) {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='green'>" . $flea->getQuantity() . "</span></p>";
                            } else {
                                echo "<p class='product-info'><strong>Quantità: </strong><span class='green'>200+</span><br>";
                            }
                            echo "<br>";
                        }
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>