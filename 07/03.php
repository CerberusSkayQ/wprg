<?php
function createCustomArray($a, $b, $c, $d) {
    $array = array();

    if (($b - $a) != ($d - $c)) {
        echo "The range of indices and values does not match.";
        return;
    }

    for ($i = $a, $j = $c; $i <= $b; $i++, $j++) {
        $array[$i] = $j;
    }

    print_r($array);
}

createCustomArray(1, 3, 5, 7);

?>