<?php
session_start ();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="prenom"><h1>Quel est votre prénom ?</h1></label>
        <input type ="text" id="prenom" name="prenom" placeholder="Saisissez votre prénom :">
        <input type="submit" name="ajouter" value="Ajouter">
    </form>

    <h2>Prénom sauvegardés :</h2>
    <ul>
        <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
            <li><?= htmlspecialchars($prenom)?></li>
            <?php endforeach; ?>
    </ul>

    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>