<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected $foodCategory; // canned, dry, fresh, frozen
    protected $lifeStages = []; // all, puppy, adult, senior
    protected $weight;

    // cibo
    public function setFoodCategory($foodCategory, $foodCategories) {
        if(in_array(strtolower($foodCategory), $foodCategories)) {
            $this->foodCategory = $foodCategory;
        } else {
            echo "<strong class='error'>ERRORE: categoria cibo non esistente</strong>";
        }
    }

    public function getFoodCategory() {
        return $this->foodCategory;
    }

    // età (no ripetizioni)
    public function addLifeStage($lifeStage, $dataLifeStages) {
        if(in_array(strtolower($lifeStage), $dataLifeStages) && !in_array(strtolower($lifeStage), $this->lifeStages)) {
            $this->lifeStages[] = strtolower($lifeStage);
        } else {
            echo "<strong class='error'>ERRORE: età non valida o già aggiunta</strong>";
        }
    }

    public function getLifeStages() {
        return $this->lifeStages;
    }

    // peso float o int maggiore di 0
    public function setWeight($weight) {
        if((is_int($weight) || is_float($weight)) && $weight > 0) {
            $this->weight = $weight;
        } else {
            echo "<strong class='error'>ERRORE: peso non valido</strong>";
        }
    }

    public function getWeight() {
        return $this->weight;
    }
}

?>