<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <button type="submit">Valider</button>
    </form>
    
    <?php
    $nombre = $_GET['nombre'];

    if ($nombre % 2 == 0) {
        echo "<h2>Nombre pair</h2>";
    } else {
        echo "<h2>Nombre impair</h2>";
    }
    ?>
</body>
</html>