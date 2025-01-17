<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="Password">Password :</label>
        <input type="text" name="password" id="password"><br><br>

        <button type="submit">Se connecter</button>
    </form>
    
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "John" && $password == "Rambo") {
        echo "<p>C'est pas ma guerre</p>";
            
    } else {
        echo "<p>Votre pire cauchemar</p>";  
    }
    ?>
</body>
</html>