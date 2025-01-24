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
$query = $mysqli->query("SELECT SUM(superficie) AS superficie_totale FROM etages");
$etages = $query->fetch_assoc(); // Utilisation de fetch_assoc() pour récupérer la première ligne

// Fermeture de la connexion
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superficie Totale des Étages</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Superficie Totale des Étages</h1>
    <table>
        <thead>
            <tr>
                <th>Superficie Totale</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                    // Affichage du résultat
                    echo htmlspecialchars($etages['superficie_totale']);
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
