<?php

$input = fopen('php://stdin', 'r');

while ($meters = fgets($input) !== false) {
	$blocks = trim(fgets($input));
	$total = 0;

	for ($i = 0; $i < strlen($blocks); $i++) {
		if ($blocks[$i] == 'P' || $blocks[$i] == 'C') 
			$total += 2;
		} elseif ($blocks[$i] == 'A' ) {
			$total += 1;
		}
	}

	echo $total . "\n";
}

echo "\n";

fclose($input);
