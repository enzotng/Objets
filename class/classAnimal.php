<?php

class Animal {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function manger() {
        echo $this->nom . " mange." . " ";
    }

    public function deplacer() {
        echo $this->nom . " se déplace." . " ";
    }

    public function parler() {
        echo $this->nom . " parle." . " ";
    }
}

class Oiseau extends Animal{

    public function manger() {
        echo $this->nom . " mange." . " ";
    }

    public function deplacer() {
        echo $this->nom . " se déplace." . " ";
    }

    public function parler() {
        echo $this->nom . " parle." . " ";
    }
}
?>