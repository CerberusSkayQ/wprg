<?php

function ciagArytmetycznyIGeometryczny($pierwszy, $roznicaIlIloraz, $iloscElementow) {
    $sumaArytmetyczna = ($iloscElementow * ($pierwszy + ($pierwszy + ($iloscElementow - 1) * $roznicaIlIloraz))) / 2;

    if ($roznicaIlIloraz != 1) {
        $sumaGeometryczna = $pierwszy * (1 - pow($roznicaIlIloraz, $iloscElementow)) / (1 - $roznicaIlIloraz);
    } else {
        $sumaGeometryczna = $pierwszy * $iloscElementow;
    }

    echo "Suma ciągu arytmetycznego: " . $sumaArytmetyczna . "<br>";
    echo "Suma ciągu geometrycznego: " . $sumaGeometryczna . "<br>";
}

ciagArytmetycznyIGeometryczny(2, 3, 5);

?>
