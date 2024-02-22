<?php

session_start();
include_once 'classes/personnage.php';
include_once 'classes/Guerrier.php';
include_once 'classes/Mage.php';
include_once 'classes/Pretre.php';
include_once 'classes/Archer.php';
include_once 'selection.php';



// $player1 = new Personnage;
// $player1->setPointDeVie(10);
// $player1->setPointDattack(2);
// $player1->setPointDeDefence(1);


// echo $player1->getPointDeVie();
// echo $player1->getPointDattack();
// echo $player1->getPointDeDefence();




// $player1 = new Pretre();
        // var_dump($player1);
        // echo $player1->capaSpe();

    
var_dump($_SESSION);

if (isset($_SESSION) && !empty($_SESSION)){

    if($_SESSION['player1']['classe'] == "Guerrier"){
        $player1 = new Guerrier();
        $player1->setPointdevie($_SESSION['player1']['hp']);
        $player1->setPointDattack($_SESSION['player1']['atk']);
        $player1->setPointDeDefence($_SESSION['player1']['def']);
    }
    if($_SESSION['player1']['classe'] == "Mage"){
        $player1 = new Mage();
        $player1->setPointdevie($_SESSION['player1']['hp']);
        $player1->setPointDattack($_SESSION['player1']['atk']);
        $player1->setPointDeDefence($_SESSION['player1']['def']);
    }
    if($_SESSION['player1']['classe'] == "Pretre"){
        $player1 = new Pretre();
        $player1->setPointdevie($_SESSION['player1']['hp']);
        $player1->setPointDattack($_SESSION['player1']['atk']);
        $player1->setPointDeDefence($_SESSION['player1']['def']);
    }
    if($_SESSION['player1']['classe'] == "Archer"){
        $player1 = new Archer();
        $player1->setPointdevie($_SESSION['player1']['hp']);
        $player1->setPointDattack($_SESSION['player1']['atk']);
        $player1->setPointDeDefence($_SESSION['player1']['def']);
    }


    if($_SESSION['player2']['classe'] == "Guerrier"){
        $player2 = new Guerrier();
        $player2->setPointdevie($_SESSION['player2']['hp']);
        $player2->setPointDattack($_SESSION['player2']['atk']);
        $player2->setPointDeDefence($_SESSION['player2']['def']);
    }
    if($_SESSION['player2']['classe'] == "Mage"){
        $player2 = new Mage();
        $player2->setPointdevie($_SESSION['player2']['hp']);
        $player2->setPointDattack($_SESSION['player2']['atk']);
        $player2->setPointDeDefence($_SESSION['player2']['def']);
    }
    if($_SESSION['player2']['classe'] == "Pretre"){
        $player2 = new Pretre();
        $player2->setPointdevie($_SESSION['player2']['hp']);
        $player2->setPointDattack($_SESSION['player2']['atk']);
        $player2->setPointDeDefence($_SESSION['player2']['def']);
    }
    if($_SESSION['player2']['classe'] == "Archer"){
        $player2 = new Archer();
        $player2->setPointdevie($_SESSION['player2']['hp']);
        $player2->setPointDattack($_SESSION['player2']['atk']);
        $player2->setPointDeDefence($_SESSION['player2']['def']);
    }


}

include_once 'Combats/action.php';
?>