<?php

session_start();

include 'selection.php';
include_once 'classes/personnage.php';
include 'classes/Guerrier.php';

// $player1 = new Personnage;
// $player1->setPointDeVie(10);
// $player1->setPointDattack(2);
// $player1->setPointDeDefence(1);


// echo $player1->getPointDeVie();
// echo $player1->getPointDattack();
// echo $player1->getPointDeDefence();
$player1 = new Guerrier();
var_dump($player1);


// var_dump($_SESSION);
?>