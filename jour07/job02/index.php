<?php
session_start ();

if (!isset($_COOKIE['nbvisites'])) {
    setcookie ('nbvisites',0,time() + 3600);
    $nbvisites = 0;
} else {
    $nbvisites = $_COOKIE['nbvisites'];
    if (isset($_POST['reset'])) {
        setcookie ('nbvisites', 0, time() + 3600);
        $nbvisites = 0;
    } else {
        $nbvisites++;
        setcookie ('nbvisites', 0, time () + 3600);
    }
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
    <h1> Nombre de visite : <?= $nbvisites ?></h1>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>