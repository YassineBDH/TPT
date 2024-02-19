<?php
// Inclure les fichiers de classe
require_once 'classes/Guerrier.php';
require_once 'classes/Mage.php';
require_once 'classes/Pretre.php';
require_once 'classes/Archer.php';

// public function attaquer($cible) {
//     $cible->subirDegats($this->pointsAttaque);
// }

// public function subirDegats($degats) {
//     $this->pointsDeVie -= max(0, $degats - $this->pointsDefense);
// }

// Création des personnages
$joueur1 = new Guerrier("Guerrier 1");
$joueur2 = new Archer("Archer 2");

// Gestion de l'action du joueur 1
if (isset($_POST['j1-action']) && $_POST['j1-action'] === "attaquer") {
    $joueur1->attaquer($joueur2);
    // Mettez à jour les points de vie du joueur 2
}

// Gestion de l'action du joueur 2
if (isset($_POST['j2-action']) && $_POST['j2-action'] === "attaquer") {
    $joueur2->attaquer($joueur1);
    // Mettez à jour les points de vie du joueur 1
}
?>
