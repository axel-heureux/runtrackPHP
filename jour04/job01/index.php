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
    $nombre_arguments = count($_GET);
    
    if ($nombre_arguments > 0) {
        echo "<p>Nombre d'arguments reçu : $nombre_arguments</p>";

        } else {
            echo "<p> Aucun argument reçu.</p>";
        
    }
    ?>
</body>
</html>