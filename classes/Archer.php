<?php


class Archer extends Personnage {
    public function __construct(){
        $this->pointDeVie = 22;
        $this->pointDattack = 7;
        $this->pointDeDefence =2;
    }
    public function capaSpe(){
        return "j'utilise ma capasité tir";
    }
}
?>