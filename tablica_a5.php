<?php

$cena = array(
    'jogurt' => '2 zł',
    'maslo' => '1.50 zł',
    'mleko' => '4 zł'
);
ksort($cena);
foreach ($cena as $item => $description) {
    echo $item, ": ", $description, "<br>";
}

?>