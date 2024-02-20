<?php

class Personnage{
    public $pointDeVie;
    public $pointDattack;
    public $pointDeDefence;


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

//Setters

    public function setPointDeVie($pointDeVie){
        $this->pointDeVie = $pointDeVie;
    }
    public function setPointDattack($pointDattack){
        $this->pointDattack = $pointDattack;
    }
    public function setPointDeDefence($pointDeDefence){
        $this->pointDeDefence = $pointDeDefence;
    }


}

?>