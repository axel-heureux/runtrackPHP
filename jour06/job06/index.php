<?php
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire CSS</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars ($selectedStyle); ?>.css">
</head>
<body>
    <form method="post" action="">
        <label for="style"> Veuillez selectionner un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php if ($selectedStyle == 'style1') echo 'selected'; ?>>Style 1 </option>
            <option value="style2" <?php if ($selectedStyle == 'style2') echo 'selected'; ?>>Style 2 </option>
            <option value="style3" <?php if ($selectedStyle == 'style3') echo 'selected'; ?>>Style 3 </option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>