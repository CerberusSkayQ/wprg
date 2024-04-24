<?php

function czyPangram($tekst) {
    $tekst = strtolower(preg_replace('/[^a-z]/', '', $tekst));
    $wystapienia = array_fill(0, 26, 0);

    for ($i = 0; $i < strlen($tekst); $i++) {
        $indeks = ord($tekst[$i]) - ord('a');
        $wystapienia[$indeks] = 1;
    }

    foreach ($wystapienia as $wystapienie) {
        if ($wystapienie == 0) {
            return false;
        }
    }

    return true;
}

$tekst1 = "The quick brown fox jumps over the lazy dog.";
$tekst2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

echo czyPangram($tekst1) ? "true" : "false";
echo "<br>";
echo czyPangram($tekst2) ? "true" : "false";

?>
