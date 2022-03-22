<?php

class CreditCard {
    protected $owner;
    protected $cardNumber;
    protected $expirationMonth;
    protected $expirationYear;
    protected $cvv;

    public function __construct($owner, $cardNumber, $expirationMonth, $expirationYear, $cvv) {
        $this->setOwner($owner);
        $this->setCardNumber($cardNumber);
        $this->setExpirationMonth($expirationMonth);
        $this->setExpirationYear($expirationYear);
        $this->setCvv($cvv);
    }

    // nominativo proprietario...
    public function setOwner($owner) {
        if(!strpos($owner, ' ')) { //...con almeno uno spazio obbligatorio
            echo "<strong class='error'>ERRORE: dati mancanti, controllare di aver inserito correttamente nome e cognome</strong>";
        } else { //...senza numeri
            $firstNameToArray = str_split($owner);
            $numeric = false;

            for($i=0; $i<count($firstNameToArray) && !$numeric; $i++) {
                if(ctype_digit($firstNameToArray[$i])) {
                    $numeric = true;
                }
            }

            if(!$numeric) {
                $this->owner = $owner;
            } else {
                echo "<strong class='error'>ERRORE: nome proprietario non valido</strong>";
            }
        }
    }

    public function getOwner() {
        return $this->owner;
    }

    // numero carta lungo almeno 13 e massimo 16 numeri
    public function setCardNumber($cardNumber) {
        if(is_numeric($cardNumber) && strlen($cardNumber) >= 13 && strlen($cardNumber) <= 16) {
            $this->cardNumber = $cardNumber;
        } else {
            echo "<strong class='error'>ERRORE: numero carta non valido</strong>";
        }
    }

    public function getCardNumber() {
        return $this->number;
    }

    // mese di scadenza compreso tra 1 e 12
    public function setExpirationMonth($expirationMonth) {
        if(is_numeric($expirationMonth) && $expirationMonth >= 1 && $expirationMonth <= 12) {
            $this->expirationMonth = $expirationMonth;
        } else {
            echo "<strong class='error'>ERRORE: meese di scadenza non valido</strong>";
        }
    }

    public function getExpirationMonth() {
        return $this->expirationMonth;
    }

    // anno di scadenza compreso tra anno corrente e i successivi 5 anni
    public function setExpirationYear($expirationYear) {
        if(is_numeric($expirationYear) && $expirationYear >= 22 && $expirationYear <= 27) {
            $this->expirationYear = $expirationYear;
        } else {
            echo "<strong class='error'>ERRORE: anno di scadenza non valido</strong>";
        }
    }

    public function isExpired() {
        $today = new DateTime();
        $expiration = DateTime::createFromFormat('m-y', $this->expirationMonth . '/' . $this->expirationYear);
        //var_dump($today);
        //var_dump($expiration);
        //echo "expiration: ", $expiration->format("m-y");
        if($today > $expiration) {
            return true;
        }
        return false;
    }

    // cvv pari a 3 numeri
    public function setCvv($cvv) {
        $noSpaceCvv = preg_replace('/\s+/', '', $cvv);
        // senza il controllo strlen($noSpaceCvv)==3 su $noSpaceCvv sarebbe accettato il valore ' 00'
        if(is_numeric($cvv) && strlen($noSpaceCvv)==3) {
            $this->cvv = $noSpaceCvv;
        } else {
            echo "<strong class='error'>ERRORE: cvv non valido</strong>";
        }
    }

    public function getCvv() {
        return $this->cvv;
    }


}

?>