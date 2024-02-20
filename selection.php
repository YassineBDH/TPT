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
    <input type="submit" name="submitSelectPlayer" value="Choisir les Combatants">
    <input type="submit" name="destroySession" value="destroy session">
</form>

<?php

if (isset($_POST['submitSelectPlayer'])){

    $_SESSION['player1']['classe'] = $_POST['selectPlayer1'];
    $_SESSION['player2']['classe'] = $_POST['selectPlayer2'];

    // echo $_POST['selectPlayer1'] .' '. $_POST['selectPlayer2'];
}
if (isset($_POST['submitSelectPlayer'])){
    session_destroy();
}


?>