<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    protected $toyCategory; // ball, flying, interactive
    protected $materials = []; // plush, nylon, rubber

    // cibo
    public function setToyCategory($toyCategory, $toyCategories) {
        if(in_array(strtolower($toyCategory), $toyCategories)) {
            $this->toyCategory = $toyCategory;
        } else {
            echo "<strong class='error'>ERRORE: categoria gioco non esistente</strong>";
        }
    }

    public function getToyCategory() {
        return $this->toyCategory;
    }

    // materiali (no ripetizioni)
    public function addMaterial($material, $toyMaterials) {
        if(in_array(strtolower($material), $toyMaterials) && !in_array(strtolower($material), $this->materials)) {
            $this->materials[] = strtolower($material);
        } else {
            echo "<strong class='error'>ERRORE: materiale non valido o già aggiunto</strong>";
        }
    }

    public function getMaterials() {
        return $this->materials;
    }
}

?>