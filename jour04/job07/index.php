<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="largeur">Largeur</label>
        <input type="text" name="largeur" id="largeur"><br><br>

        <label for="hauteur">Hauteur</label>
        <input type="text" name="hauteur" id="hauteur"><br><br>

        <button type="submit">Valider</button>
    </form>
    
    <?php
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

    
    ?>
</body>
</html>