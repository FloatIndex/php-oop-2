<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected $foodCategory = 'ND'; // canned, dry, fresh, frozen
    protected $lifeStages = ['ND']; // all, puppy, adult, senior

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
}

?>