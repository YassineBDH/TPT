<?php

require_once 'Personnage.php';


class Pretre extends Personnage {
    public function affichage(){
        return "Je suis Pretre";
    }
    public function capacite(){
        return "autoguérison";
    }

    public function soigner(){
        $soins = rand(10,20);
        $this->pointDeVie += $soins;
        echo "{$this->nom} recupère {$soins} points de vie";
    }
}

?>