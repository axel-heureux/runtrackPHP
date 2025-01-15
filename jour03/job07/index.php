<?php

$chaine = "Certaines choses changent, et d'autres ne changeront jamais.";

$longueur = strlen($chaine);

$chaine_modifie = "";

for ($i = 0; $i < $longueur; $i ++) {
    $chaine_modifie .= $chaine[($i +1) % $longueur];
}

echo $chaine_modifie;

?>