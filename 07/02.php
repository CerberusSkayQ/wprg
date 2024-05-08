<?php

function replaceWithDollarSign(&$array, $n) {
    if ($n < 0 || $n >= count($array)) {
        echo "BŁĄD";
    } else {
        $array[$n] = '$';
    }
}

$numbers = [1, 2, 3, 4, 5];
$position = 2;

replaceWithDollarSign($numbers, $position);

print_r($numbers);




?>