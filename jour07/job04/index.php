<?php
session_start();

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenom'] = $_POST['prenom'];
}

if (isset($_POST['deco'])) {
    unset($_SESSION['prenom']);
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
<?php
if (isset($_SESSION['prenom'])) {
    echo '<h2>Bonjour  ' . htmlspecialchars($_SESSION['prenom']) . ' </h2>';
    echo '<form method="POST"><button type="submit" name="deco">Déconnexion</button></form>';
} else {
    echo '
        <form method="POST">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit">Connexion</button>
        </form>
    ';
}
?>
</body>
</html>
