<?php
function occurences($str,$char) {
    return substr_count($str,$char);
}

$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurences est de : "; 
echo occurences($str,$char);
?>