<?php


class Mage extends Personnage {
    public function __construct(){
        $this->pointDeVie = 20;
        $this->pointDattack = 4;
        $this->pointDeDefence =2;
    }
    public function capaSpe(){
        return "j'active ma capacité de boule de Feu";
    }
}
?>