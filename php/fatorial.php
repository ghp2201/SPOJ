<?php
$input = fopen('php://stdin', 'r');

while (($linha = fgets($input)) !== false) {
    $numerosAscendentes = [];

    for ($i = 0; $i < $linha; $i++) {
        $numerosAscendentes[] = $linha - $i;
    }

    $fatorial = array_product($numerosAscendentes);

    echo $fatorial . "\n";
}

echo "\n";

fclose($input);