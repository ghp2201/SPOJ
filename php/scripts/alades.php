<?php
$input = fopen('php://stdin', 'r');

while (($linha = fgets($input)) !== false) {
    $caracteres = explode(" ", $linha);

    if ($caracteres[0] == '0') {
        $caracteres[0] = 24;
    } elseif ($caracteres[2] == '0') {
        $caracteres[2] = 24;
    }

    $horaInicial = (($caracteres[0] * 60) + $caracteres[1]);
    $horaFinal = (($caracteres[2] * 60) + $caracteres[3]);

    if($horaInicial > $horaFinal) {
        $tempoDeSono = abs(($horaInicial - $horaFinal) - (24*60));
    } else {
        $tempoDeSono = (($horaFinal - $horaInicial));
    }

    if ($tempoDeSono > 0) {
        echo $tempoDeSono . "\n";
    }
}

echo "\n";

fclose($input);