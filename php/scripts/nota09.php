<?php

$input = fopen('php://stdin', 'r');

while (($notas = fgets($input)) !== false) {
	if ($notas == 0) {
		echo "E" . "\n";
	} else if (1 <= $notas && $notas <= 35) {
		echo "D" . "\n";
	} else if (36 <= $notas && $notas <= 60) {
		echo "C" . "\n";
	} else if (61 <= $notas && $notas <= 85) {
		echo "B" . "\n";
	} else if (86 <= $notas && $notas <= 100) {
		echo "A" . "\n";
	}
}

echo "\n";

fclose($input);