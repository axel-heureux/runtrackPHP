<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="nom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="nom">Mail :</label>
        <input type="text" name="mail" id="mail"><br><br>

        <button type="submit">Envoyer</button>
    </form>
    
    <?php
    if ($_GET) {
        echo "<table border='1'>";
        foreach ($_GET as $cle => $valeur) {
            echo "<tr><td>$cle</td><td>$valeur</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>