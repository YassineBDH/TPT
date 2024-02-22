<?php

class Guerrier extends Personnage {
    public function __construct(){
        $this->pointDeVie = 30;
        $this->pointDattack = 5;
        $this->pointDeDefence =3;
    }
    public function capaSpe(){
        return "j'active ma capacité Mur De Fer";
    }
}
?>