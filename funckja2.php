<?php
function funkcja1($liczba)
{
    if ($liczba < 2) {
        echo "Liczba " . $liczba . " nie jest liczbą pierwszą";
        return 0;
    }

    for ($i = 2; $i < $liczba; $i++) {
        if ($liczba % $i == 0) {
            echo "Liczba " . $liczba . " nie jest liczbą pierwszą";
            return 0;
        }
    }
    echo "Liczba " . $liczba . " jest liczbą pierwszą";
}

funkcja1(rand(1, 100));

?>