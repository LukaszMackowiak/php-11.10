<?php

$data = getdate();
$dzien = $data["mday"];
$miesiac = $data["mon"];
$rok = $data["year"];
$godzina = $data["hours"];
$minuta = $data["minutes"];
$sekunda = $data["seconds"];
if ($dzien < 10)
    $dzien = "0" . $dzien;
if ($miesiac < 10)
    $miesiac = "0" . $miesiac;
if ($godzina < 10)
    $godzina = "0" . $godzina;
if ($minuta < 10)
    $minuta = "0" . $minuta;
if ($sekunda < 10)
    $sekunda = "0" . $sekunda;
echo "Bieżąca data to: $dzien-$miesiac-$rok r. <br>";
echo "Aktualna godzina to: $godzina : $minuta : $sekunda";

?>