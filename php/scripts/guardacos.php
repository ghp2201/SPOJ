<?php

$input = fopen('php://stdin', 'r');

while (($linha = fgets($input)) !== false) {
    $dados = explode(" ", $linha);

    $distancia = sqrt(($dados[0] * $dados[0]) + 144);
    $velLadrao = $dados[1];
    $velGuarda = $dados[2];

    $tempoLadrao = 12 / $velLadrao;
    $tempoGuarda = $distancia / $velGuarda;

    if ($tempoGuarda <= $tempoLadrao) {
        echo "S" . "\n";
    } else {
        echo "N" . "\n";
    }
}

echo "\n";

fclose($file);