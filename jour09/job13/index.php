<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

// Connexion à la base de données
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Connexion échouée : " . $mysqli->connect_error);
}

// Récupération des données
$query = $mysqli->query("SELECT nom, id_etages FROM salles ;");
$salles = $query->fetch_all(MYSQLI_ASSOC);

// Fermeture de la connexion
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Étudiants</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Tableau des Étudiants</h1>
    <table>
        <thead>
            <tr>
                <?php
                // Affichage des en-têtes du tableau
                if (!empty($salles)) {
                    foreach (array_keys($salles[0]) as $column) {
                        echo "<th>" . htmlspecialchars($column) . "</th>";
                    }
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Affichage des données des étudiants
            if (!empty($salles)) {
                foreach ($salles as $salles) {
                    echo "<tr>";
                    foreach ($salles as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
            }}}
            ?>
        </tbody>
    </table>
</body>
</html>
