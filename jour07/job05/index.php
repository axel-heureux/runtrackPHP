<?php
session_start();

// Initialisation de la partie si nécessaire
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ["-", "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"]
    ];
    $_SESSION['joueur'] = 'X'; // Le joueur X commence
    $_SESSION['message'] = '';
}

// Gérer un coup joué par un joueur
if (isset($_POST['case'])) {
    $case = $_POST['case'];
    $ligne = intval($case / 3);
    $col = $case % 3;

    if ($_SESSION['grille'][$ligne][$col] == "-") {
        $_SESSION['grille'][$ligne][$col] = $_SESSION['joueur'];

        // Vérifier gagnant
        for ($i = 0; $i < 3; $i++) {
            // Vérifie les lignes et les colonnes
            if ($_SESSION['grille'][$i][0] == $_SESSION['grille'][$i][1] && $_SESSION['grille'][$i][1] == $_SESSION['grille'][$i][2] && $_SESSION['grille'][$i][0] != "-") {
                $_SESSION['message'] = $_SESSION['joueur'] . " a gagné!";
                $_SESSION['grille'] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]]; // Réinitialiser
                $_SESSION['joueur'] = 'X';
            }
            if ($_SESSION['grille'][0][$i] == $_SESSION['grille'][1][$i] && $_SESSION['grille'][1][$i] == $_SESSION['grille'][2][$i] && $_SESSION['grille'][0][$i] != "-") {
                $_SESSION['message'] = $_SESSION['joueur'] . " a gagné!";
                $_SESSION['grille'] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]]; // Réinitialiser
                $_SESSION['joueur'] = 'X';
            }
        }
        // Vérifie les diagonales
        if ($_SESSION['grille'][0][0] == $_SESSION['grille'][1][1] && $_SESSION['grille'][1][1] == $_SESSION['grille'][2][2] && $_SESSION['grille'][0][0] != "-") {
            $_SESSION['message'] = $_SESSION['joueur'] . " a gagné!";
            $_SESSION['grille'] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]]; // Réinitialiser
            $_SESSION['joueur'] = 'X';
        }
        if ($_SESSION['grille'][0][2] == $_SESSION['grille'][1][1] && $_SESSION['grille'][1][1] == $_SESSION['grille'][2][0] && $_SESSION['grille'][0][2] != "-") {
            $_SESSION['message'] = $_SESSION['joueur'] . " a gagné!";
            $_SESSION['grille'] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]]; // Réinitialiser
            $_SESSION['joueur'] = 'X';
        }

        // Vérifier match nul
        $matchNul = true;
        foreach ($_SESSION['grille'] as $ligne) {
            if (in_array("-", $ligne)) {
                $matchNul = false;
            }
        }
        if ($matchNul) {
            $_SESSION['message'] = "Match nul!";
            $_SESSION['grille'] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]]; // Réinitialiser
            $_SESSION['joueur'] = 'X';
        }

        // Changer de joueur
        if ($_SESSION['message'] == '') {
            $_SESSION['joueur'] = ($_SESSION['joueur'] == 'X') ? 'O' : 'X';
        }
    }
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    $_SESSION['grille'] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]];
    $_SESSION['joueur'] = 'X';
    $_SESSION['message'] = '';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 60px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid black;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
        #message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Jeu du Morpion</h2>

<table>
    <?php for ($i = 0; $i < 3; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 3; $j++): ?>
                <td>
                    <form method="POST">
                        <button type="submit" name="case" value="<?= $i * 3 + $j ?>"><?= $_SESSION['grille'][$i][$j] ?></button>
                    </form>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<form method="POST">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

<div id="message"><?= $_SESSION['message'] ?></div>

</body>
</html>
