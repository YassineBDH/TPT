<?php

class Personnage{
    public $nom;
    public $pointDeVie;
    public $pointDattack;
    public $pointDeDefence;
    public $capaciteSpeciale;

    public function __construct($nom,$pointDeVie,$pointDattack,$pointDeDefence,$capaciteSpeciale) {
        $this->nom = $nom;
        $this->pointDeVie = $pointDeVie;
        $this->pointDattack = $pointDattack;
        $this->pointDeDefence = $pointDeDefence;
        $this->capaciteSpeciale = $capaciteSpeciale;

    }
//getters
    public function getPointDeVie(){
        return $this->pointDeVie;
    }
    public function getPointDattack(){
        return $this->pointDattack;
    }
    public function getPointDeDefence(){
        return $this->pointDeDefence;
    }
    public function getCapaciteSpeciale(){
        return $this->capaciteSpeciale;
    }
//Setters

    public function setPointDeVie($pointDeVie){
        $this->pointDeVie;
    }
    public function setPointDattack($pointDattack){
        $this->pointDattack;
    }
    public function setPointDeDefence($pointDeDefence){
        $this->pointDeDefence;
    }
    public function setCapaciteSpeciale($capaciteSpeciale){
        $this->capaciteSpeciale;
    }

    
}

$guerrier = new Personnage('guerrier',100,12,5,20);
$archer = new Personnage ('archer',120,10,5,18);
$mage = new Personnage('mage',90,15,6,20);
$pretre = new Personnage('pretre',110,9,10,20);

?>