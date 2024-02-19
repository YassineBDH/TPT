<?php

require_once 'classes/Personnage.php';


class Archer extends Personnage {
        public function affichage(){
            return "Je suis Archer";
        }
        public function capacite(){
            return "defence Absolut";
        }
    }


    ?>