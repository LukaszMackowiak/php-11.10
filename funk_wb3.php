<?php

$data = getdate();
$dzien = $data["wday"];
$dzien_miesiac = $data["mday"];
$miesiac = $data["month"];
$rok = $data["year"];
$dzien_rok = $data["yday"];

$dzien_tab = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');

echo "Dziś jest " . $dzien_tab[$dzien] . "<br>";
echo $dzien_miesiac . " " . $miesiac . " " . $rok . "r. <br>";
echo "Jest to " . $dzien_rok . " dzień roku <br>";

?>