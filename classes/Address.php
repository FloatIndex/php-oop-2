<?php

class Address {
    protected $address;
    protected $civicNumber;
    protected $postalCode;
    protected $city;
    protected $country;

    public function __construct($address, $civicNumber, $postalCode, $city, $country) {
        $this->setAddress($address);
        $this->setCivicNumber($civicNumber);
        $this->setPostalCode($postalCode);
        $this->setCity($city);
        $this->setCountry($country);
    }

    // indirizzo non vuoto
    public function setAddress($address) {
        if(!empty($address)) {
            $this->address = $address;
        } else {
            echo "<strong class='error'>ERRORE: indirizzo non valido</strong>";
        }
    }

    public function getAddress() {
        return $this->address;
    }

    // numero civico
    public function setCivicNumber($civicNumber) {
        if(is_numeric($civicNumber)) {
            $this->civicNumber = $civicNumber;
        } else {
            echo "<strong class='error'>ERRORE: numero civico non valido</strong>";
        }
    }

    public function getCivicNumber() {
        return $this->civicNumber;
    }

    // codice postale lungo 5 cifre
    public function setPostalCode($postalCode) {
        if(is_numeric($postalCode) && strlen($postalCode)==5) {
            $this->postalCode = $postalCode;
        } else {
            echo "<strong class='error'>ERRORE: codice postale non valido</strong>";
        }
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    // città non vuoto, privo di numeri
    public function setCity($city) {
        $cityToArray = str_split($city);
        $numeric = false;

        for($i=0; $i<count($cityToArray) && !$numeric; $i++) {
            if(ctype_digit($cityToArray[$i])) {
                $numeric = true;
            }
        }

        if(!$numeric && !empty($city)) {
            $this->city = $city;
        } else {
            echo "<strong class='error'>ERRORE: nome città non valido</strong>";
        }
    }

    public function getCity() {
        return $this->city;
    }

    // paese non vuoto, privo di numeri
    public function setCountry($country) {
        $countryToArray = str_split($country);
        $numeric = false;

        for($i=0; $i<count($countryToArray) && !$numeric; $i++) {
            if(ctype_digit($countryToArray[$i])) {
                $numeric = true;
            }
        }

        if(!$numeric && !empty($country)) {
            $this->country = $country;
        } else {
            echo "<strong class='error'>ERRORE: nome paese non valido</strong>";
        }
    }

    public function getCountry() {
        return $this->country;
    }

    // indirizzo completo
    public function getFullAddress() {
        return "{$this->address}, {$this->civicNumber}, {$this->postalCode}, {$this->city}, {$this->country}";
    }
}

?>