<?php

$tab = array(
    "Dzień 1" => "Poniedziałek",
    "Dzień 2" => "Wtorek",
    "Dzień 3" => "Środa",
    "Dzień 4" => "Czwartek",
    "Dzień 5" => "Piątek",
    "Dzień 6" => "Sobota",
    "Dzień 7" => "Niedziela"
);

foreach ($tab as $item => $description) {
    echo $item, ": ", $description, "<br>";
}
?>