<?php

require_once __DIR__ . '/GuestUser.php';

class RegisteredUser extends GuestUser {
    protected $discount = 20;

    public function setDiscount($number) {
        if ($number >=0 && $number <= 100) {
            $this->discount = $number;
        } else {
            "<strong class='error'>ERRORE: valore discount non valido</strong>";
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}

?>