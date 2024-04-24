<?php

function pomnozMacierze($macierzA, $macierzB) {
    $liczbaWierszyA = count($macierzA);
    $liczbaKolumnA = count($macierzA[0]);
    $liczbaWierszyB = count($macierzB);
    $liczbaKolumnB = count($macierzB[0]);

    if ($liczbaKolumnA != $liczbaWierszyB) {
        echo "Wymiary macierzy nie są zgodne do wykonania mnożenia.";
        return;
    }

    $macierzWynikowa = array();
    for ($i = 0; $i < $liczbaWierszyA; $i++) {
        $macierzWynikowa[$i] = array_fill(0, $liczbaKolumnB, 0);
    }

    for ($i = 0; $i < $liczbaWierszyA; $i++) {
        for ($j = 0; $j < $liczbaKolumnB; $j++) {
            for ($k = 0; $k < $liczbaKolumnA; $k++) {
                $macierzWynikowa[$i][$j] += $macierzA[$i][$k] * $macierzB[$k][$j];
            }
        }
    }

    return $macierzWynikowa;
}

$macierzA = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

$macierzB = array(
    array(7, 8),
    array(9, 10),
    array(11, 12)
);

$wynik = pomnozMacierze($macierzA, $macierzB);
echo "Wynik mnożenia macierzy:<br>";
foreach ($wynik as $wiersz) {
    echo "[" . implode(", ", $wiersz) . "]<br>";
}

?>
