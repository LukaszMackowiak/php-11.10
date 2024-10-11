<?php
function Suma($a, $b)
{
    echo "Wynik działania sumy wynosi: " . $a + $b;
}
Suma(2, 3);

function Suma2($a, $b)
{
    return $a + $b;
}

echo Suma2(2, 3);
?>