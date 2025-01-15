<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait.";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];
$voyelles = "aeiouyAEIOUY";

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (ctype_alpha($char)) {
        if (strpos($voyelles, $char) !== false) {
            $dic["voyelles"] ++;
        } else { 
            $dic["consonnes"] ++;
        }
    }
}

echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr>";
echo "</tbody>";
echo "</table>";


?>