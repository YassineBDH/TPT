<?php

require_once 'Personnage.php';




class Guerrier extends Personnage {
    public function affichage(){
        return "Je suis guerrier";
    }
    public function capacite(){
        return "defence Absolut";
    }
    public function attaquer($enemie){
        $degats = rand(10,12);
        $enemie->pointDevie-=$degats;
        echo "{$this->nom} attaque {$enemie->nom} et lui inflige {$degats} points de degats";
    }
}

$guerrier1 = new Guerrier(120,15,5,"defence Absolut");

echo $guerrier1->affichage();
echo"<br>";
var_dump($guerrier1);
echo"<br>";

?>