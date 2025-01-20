<?php
function calcul ($nombre1,$operation,$nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            return $nombre1 / $nombre2;
    }
}

echo calcul (10,'+',5);
?>