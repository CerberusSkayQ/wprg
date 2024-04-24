<?php

function sumaCyfr($liczba) {
    do {
        $suma = 0;
        $cyfry = str_split($liczba);
        foreach ($cyfry as $cyfra) {
            $suma += $cyfra;
        }
        $liczba = $suma;
    } while ($suma < 10);

    return $suma;
}

$liczba = 12345;
$wynik = sumaCyfr($liczba);
echo "Suma cyfr liczby $liczba wynosi $wynik.";

?>
