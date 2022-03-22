<?php

require_once __DIR__ . '/Product.php';

class FleaAndTick extends Product {
    protected $fleaAndTickCategory = 'ND'; // pills, collar, shampoo
    protected $monthlyAvailability = ['ND'];

    // categoria antipulci scelta tra pills, collar, shampoo
    public function setFleaAndTickCategory($fleaAndTickCategory, $fleaAndTickCategories) {

        if(in_array(strtolower($fleaAndTickCategory), $fleaAndTickCategories)) {
            $this->fleaAndTickCategory = $fleaAndTickCategory;
        } else {
            echo "<strong class='error'>ERRORE: categoria prodotto non esistente</strong>";
        }
    }

    public function getFleaAndTickCategory() {
        return $this->fleaAndTickCategory;
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