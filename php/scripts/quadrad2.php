<?php

$input = fopen('php://stdin', 'r');

while (($numero= fgets($input)) !== false) {
    $total = $numero * $numero;

    echo $total . "\n";
}

echo "\n";

fclose($input);