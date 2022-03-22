<?php

class Product {
    protected $productName;
    protected $brand = 'ND';
    protected $productCategory; // food, toy, flea and tick
    protected $pet; // dog, cat
    protected $price;
    protected $quantity;

    public function __construct($productName, $productCategory, $productCategories, $pet, $pets, $price, $quantity) {
        $this->setProductame($productName);
        $this->setProductCategory($productCategory, $productCategories);
        $this->setPet($pet, $pets);
        $this->setPrice($price);
        $this->setQuantity($quantity);
    }

    // nome prodotto
    public function setProductame($productName) {
        if(is_string($productName) && !empty($productName)) {
            $this->productName = $productName;
        } else {
            echo "<strong class='error'>ERRORE: nome prodotto non valido</strong>";
        }
    }

    public function getProductName() {
        return $this->productName;
    }

    // brand
    public function setBrand($brand) {
        if(is_string($brand) && !empty($brand)) {
            $this->brand = $brand;
        } else {
            echo "<strong class='error'>ERRORE: brand non valido</strong>";
        }
    }

    public function getBrand() {
        return $this->brand;
    }

    // categoria prodotto scelta tra toy, food, flea and tick
    public function setProductCategory($productCategory, $productCategories) {

        if(in_array(strtolower($productCategory), $productCategories)) {
            $this->productCategory = $productCategory;
        } else {
            echo "<strong class='error'>ERRORE: categoria prodotto non esistente</strong>";
        }
    }

    public function getProductCategory() {
        return $this->productCategory;
    }

    // pet scelto tra dog, cat
    public function setPet($pet, $pets) {
        if(in_array(strtolower($pet), $pets)) {
            $this->pet = $pet;
        } else {
            echo "<strong class='error'>ERRORE: pet non esistente</strong>";
        }
    }

    public function getPet() {
        return $this->pet;
    }

    // prezzo float maggiore di 0
    public function setPrice($price) {
        if((is_int($price) || is_float($price)) && $price > 0) {
            $this->price = $price;
        } else {
            echo "<strong class='error'>ERRORE: prezzo non valido</strong>";
        }
    }

    public function getPrice() {
        return $this->price;
    }

    // quantità int maggiore o uguale a 0; se maggiore di 200 setta valore di default
    public function setQuantity($quantity) {
        if(is_int($quantity) && $quantity >= 0) {
            if($quantity<=200) {
                $this->quantity = $quantity;
            } else {
                $this->quantity = '200+';
            }
        } else {
            echo "<strong class='error'>ERRORE: nome prodotto non valido</strong>";
        }
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

?>