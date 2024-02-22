<form method="post">
    <select name="selectPlayer1">
        <option value="guerrier">Guerrier</option>
        <option value="mage">Mage</option>
        <option value="pretre">Prêtre</option>
        <option value="archer">Archer</option>
    </select>
    <select name="selectPlayer2">
        <option value="guerrier">Guerrier</option>
        <option value="mage">Mage</option>
        <option value="pretre">Prêtre</option>
        <option value="archer">Archer</option>
    </select>
    <input type="submit" name="submitSelectPlayer" value="Lancez la partie">
    <input type="submit" name="destroySession" value="destroy session">
</form>

<?php

include_once 'classes/personnage.php';
include_once 'classes/Guerrier.php';
include_once 'classes/Mage.php';
include_once 'classes/Pretre.php';
include_once 'classes/Archer.php';

if (isset($_POST['submitSelectPlayer'])){

    if($_POST['selectPlayer1'] == "guerrier"){
    $player1 = new Guerrier();
    $_SESSION['player1']['classe'] =  "guerrier";
    $_SESSION['player1']['hp'] = $player1->getPointDeVie();
    $_SESSION['player1']['atk'] = $player1->getPointDattack();
    $_SESSION['player1']['def'] = $player1->getPointDeDefence();

    }
    if($_POST['selectPlayer1'] == "mage"){
        $player1 = new Mage();
        $_SESSION['player1']['classe'] =  "mage";
        $_SESSION['player1']['hp'] = $player1->getPointDeVie();
        $_SESSION['player1']['atk'] = $player1->getPointDattack();
        $_SESSION['player1']['def'] = $player1->getPointDeDefence();
    }
    if($_POST['selectPlayer1'] == "pretre"){
        $player1 = new Pretre();
        $_SESSION['player1']['classe'] =  "pretre";
        $_SESSION['player1']['hp'] = $player1->getPointDeVie();
        $_SESSION['player1']['atk'] = $player1->getPointDattack();
        $_SESSION['player1']['def'] = $player1->getPointDeDefence();
    }
    if($_POST['selectPlayer1'] == "archer"){
        $player1 = new Archer();
        $_SESSION['player1']['classe'] =  "archer";
        $_SESSION['player1']['hp'] = $player1->getPointDeVie();
        $_SESSION['player1']['atk'] = $player1->getPointDattack();
        $_SESSION['player1']['def'] = $player1->getPointDeDefence();
    }


    if($_POST['selectPlayer2'] == "guerrier"){
        $player2 = new Guerrier();
        $_SESSION['player2']['classe'] =  "guerrier";
        $_SESSION['player2']['hp'] = $player2->getPointDeVie();
        $_SESSION['player2']['atk'] = $player2->getPointDattack();
        $_SESSION['player2']['def'] = $player2->getPointDeDefence();
    
    }
    if($_POST['selectPlayer2'] == "mage"){
        $player2 = new Mage();
        $_SESSION['player2']['classe'] =  "mage";
        $_SESSION['player2']['hp'] = $player2->getPointDeVie();
        $_SESSION['player2']['atk'] = $player2->getPointDattack();
        $_SESSION['player2']['def'] = $player2->getPointDeDefence();
    }
    if($_POST['selectPlayer2'] == "pretre"){
        $player2 = new Pretre();
        $_SESSION['player2']['classe'] =  "pretre";
        $_SESSION['player2']['hp'] = $player2->getPointDeVie();
        $_SESSION['player2']['atk'] = $player2->getPointDattack();
        $_SESSION['player2']['def'] = $player2->getPointDeDefence();
    }
    if($_POST['selectPlayer2'] == "archer"){
        $player2 = new Archer();
        $_SESSION['player2']['classe'] =  "archer";
        $_SESSION['player2']['hp'] = $player2->getPointDeVie();
        $_SESSION['player2']['atk'] = $player2->getPointDattack();
        $_SESSION['player2']['def'] = $player2->getPointDeDefence();
    }

// if (isset($_POST['atkJoueur1'])){
//     echo $player1->attaque(2);

//     echo "joueur 1 lance une attaque ";
// }

// if (isset($_POST['atkJoueur2'])){
//     echo $player2->attaque(1);
//     echo "joueur 2 lance une attaque ";

// }



    // echo $_POST['selectPlayer1'] .' '. $_POST['selectPlayer2'];
}
if (isset($_POST['destroySession'])){
    session_destroy();
}


?>