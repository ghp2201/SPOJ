<?php

$input = fopen('php://stdin', 'r');

while (($quantidade = fgets($input)) !== false) {
    for ($i = 0; $i <= $quantidade; $i++) {
        $valor = array();

        $valor = fgets($input);

        $total += $valor;
    }

    echo $total;
}

echo "\n";

fclose($input);