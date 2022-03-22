<?php

    class GuestUser {
        protected $firstName;
        protected $lastName;
        protected $nickName;
        protected $email;
        protected $phoneNumber;
        protected $discount = 0;
        protected $registered = false;
        public $address;
        protected $creditCard;

        public function __construct($firstName, $lasttName, $email) {
            $this->setFirstName($firstName);
            $this->setLasttName($lasttName);
            $this->setEmail($email);
            $this->setNickName();
        }

        // nome non vuoto, privo di numeri
        public function setFirstName($firstName) {
            $firstNameToArray = str_split($firstName);
            $numeric = false;

            for($i=0; $i<count($firstNameToArray) && !$numeric; $i++) {
                if(ctype_digit($firstNameToArray[$i])) {
                    $numeric = true;
                }
            }

            if(!$numeric && !empty($firstName)) {
                $this->firstName = $firstName;
            } else {
                echo "<strong class='error'>ERRORE: nome utente non valido</strong>";
            }
        }

        public function getFirstName() {
            return $this->firstName;
        }

        // cognome non vuoto, privo di numeri
        public function setLasttName($lastName) {
            $lastNameToArray = str_split($lastName);
            $numeric = false;

            for($i=0; $i<count($lastNameToArray) && !$numeric; $i++) {
                if(ctype_digit($lastNameToArray[$i])) {
                    $numeric = true;
                }
            }

            if(!$numeric && !empty($lastName)) {
                $this->lastName = $lastName;
            } else {
                echo "<strong class='error'>ERRORE: cognome utente non valido</strong>";
            }
        }

        public function getLastName() {
            return $this->lastName;
        }

        // nickname generato automaticamente nel formato nome-cognome, privato dei whitespace
        public function setNickName() {
            $this->nickName = preg_replace('/\s+/', '', strtolower($this->firstName)) . '-' . preg_replace('/\s+/', '', strtolower($this->lastName));
        }

        public function getNickName() {
            return $this->nickName;
        }

        // indirizzo email deve contenere '@' e '.'
        public function setEmail($email) {
            if (strpos($email, '@') == false && strpos($email, '.') == false) {
                echo "<strong class='error'>ERRORE: indirizzo email non valido</strong>";
            } else {
                $this->email = $email;
            }
        }

        public function getEmail() {
            return $this->email;
        }

        // numero di telefono lungo 10 cifre
        public function setPhoneNumber($phoneNumber) {
            if(is_numeric($phoneNumber) && strlen($phoneNumber)==10) {
                $this->phoneNumber = $phoneNumber;
            } else {
                echo "<strong class='error'>ERRORE: numero di telefono non valido</strong>";
            }
        }

        public function getPhoneNumber() {
            return $this->phoneNumber;
        }

        // discount
        public function getDiscount() {
            return $this->discount;
        }

        // registrato (booleano)
        public function getRegistered() {
            return $this->registered;
        }

        // i controlli sull'indirizzo sono già fatti nella relativa classe
        public function setAddress($address) {
            $this->address = $address;
        }

        public function getAddress() {
            return $this->address;
        }

        // i controlli sulla carta di credito sono già fatti nella relativa classe
        public function setCreditCard($creditCard) {
            $this->creditCard = $creditCard;
        }

        public function getCreditCard() {
            return $this->creditCard;
        }

        // info utente complete
        public function getUserInfo() {
            return "";
        }

    }

?>