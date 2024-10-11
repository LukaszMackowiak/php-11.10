<?php

$tab = array(3, 9, 1, 2, 4, 8, 7, 5, 3, 1);
echo "Tablica przed dodawaniem: ";
foreach ($tab as $item) {
    echo $item . ", ";
}

echo "<br> Tablica pod dodawaniu: ";
foreach ($tab as $item) {
    echo $item + 2 . ", ";
}
?>