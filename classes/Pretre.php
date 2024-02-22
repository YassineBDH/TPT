<?php


class Pretre extends Personnage {
    public function __construct(){
        $this->pointDeVie = 25;
        $this->pointDattack = 6;
        $this->pointDeDefence =1;
    }
    public function capaSpe(){
        return "j'active ma capacité de soin";
    }
}
?>