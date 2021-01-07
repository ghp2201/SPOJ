<?php

$input = fopen('php://stdin', 'r');

while (($notas = fgets($input)) !== false) {
	$notasSeparadas = explode(" ", $notas);

	sort($notasSeparadas, SORT_NUMERIC);

	$n1 = $notasSeparadas[1];
	$n2 = $notasSeparadas[2];
	$n3 = $notasSeparadas[3];

	$notaFinal = $n1 + $n2 + $n3;

	$notaEscola = number_format($notaFinal, 1);

	echo $notaEscola. "\n";
}

echo "\n";

fclose($input);