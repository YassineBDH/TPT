<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jeu de combat</title>
</head>
<body>
    <div id="combat-container">
        <div id="joueur1">
            <h2>Joueur 1</h2>
            <form id="joueur1-form">
                <input type="submit" id="j1-attaquer" name="action" value="Attaquer">
                <input type="submit" id="j1-capacite-speciale" name="action" value="Capacité spéciale">
            </form>
        </div>
        <div id="joueur2">
            <h2>Joueur 2</h2>
            <form id="joueur2-form">
                <input type="submit" id="j2-attaquer" name="action" value="Attaquer">
                <input type="submit" id="j2-capacite-speciale" name="action" value="Capacité spéciale">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    
    <?php
  
    include_once 'combats/action.php';
    ?>


</body>
</html>
