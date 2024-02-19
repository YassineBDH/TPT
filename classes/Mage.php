<?php

require_once ('classes/Personnage.php');


class Mage extends Personnage {
    public function affichage(){
        return "Je suis Mage";
    }
    public function capacite(){
        return "jette un sort";
    }
}



?>