<?php

require_once __DIR__ . '/Product.php';

class Flea extends Product {
    protected $fleaCategory; // pills, collar, shampoo
    protected $monthlyAvailability = [];

    // categoria antipulci scelta tra pills, collar, shampoo
    public function setFleaCategory($fleaCategory, $fleaCategories) {

        if(in_array(strtolower($fleaCategory), $fleaCategories)) {
            $this->fleaCategory = $fleaCategory;
        } else {
            echo "<strong class='error'>ERRORE: categoria prodotto non esistente</strong>";
        }
    }

    public function getFleaCategory() {
        return $this->fleaCategory;
    }

    // disponibilità mensile (no ripetizioni)
    public function addMonthlyAvailability($month, $months) {
        if(in_array(strtoupper($month), $months) && !in_array(strtoupper($month), $this->monthlyAvailability)) {
            $this->monthlyAvailability[] = strtoupper($month);
        } else {
            echo "<strong class='error'>ERRORE: mese non valido o già aggiunto</strong>";
        }
    }

    public function getMonthlyAvailability() {
        return $this->monthlyAvailability;
    }

}

?>