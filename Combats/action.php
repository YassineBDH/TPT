<form method="POST" >
<div class="joueur1">
    <h2>joueur 1</h2>

    <p>Nom de la classe : <?php echo $_SESSION['player1']['classe']?> </p>
    <p>HP :<?php echo $_SESSION['player1']['hp']?></p>
    <p>Atk :<?php echo $_SESSION['player1']['atk']?></p>
    <p>Def :<?php echo $_SESSION['player1']['def']?></p>
    <input type="submit" name = "atkJoueur1" value = "Attaque">
</div>

<div class="joueur2">
    <h2>joueur 2</h2>

    <p>Nom de la classe : <?php echo $_SESSION['player2']['classe']?> </p>
    <p>HP :<?php echo $_SESSION['player2']['hp']?></p>
    <p>Atk :<?php echo $_SESSION['player2']['atk']?></p>
    <p>Def :<?php echo $_SESSION['player2']['def']?></p>
    <input type="submit" name = "atkJoueur2" value = "Attaque">

</div>

</form>
<?php

var_dump($_SESSION);

// Instanciation de l'objet Player
$player1 = new Player($_SESSION['player1']['classe'], $_SESSION['player1']['hp'], $_SESSION['player1']['atk'], $_SESSION['player1']['def']);
$player2 = new Player($_SESSION['player2']['classe'], $_SESSION['player2']['hp'], $_SESSION['player2']['atk'], $_SESSION['player2']['def']);


if (isset($_POST['atkJoueur1'])){
    echo $player1->attaque(2);
}

if (isset($_POST['atkJoueur2'])){
    // echo $player2->attaque(1);
    var_dump($player2);
}


    ?>