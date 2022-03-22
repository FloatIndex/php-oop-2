<?php

require_once __DIR__ . '/GuestUser.php';

class RegisteredUser extends GuestUser {
    protected $discount = 20;
    protected $registered = true;

    // discount intero compreso tra 0 e 100
    public function setDiscount($number) {
        if (is_int($number) && $number >=0 && $number <= 100) {
            $this->discount = $number;
        } else {
            "<strong class='error'>ERRORE: valore discount non valido</strong>";
        }
    }


}

?>