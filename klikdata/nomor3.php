<?php

$numbers = [1, 3, 5, 6, 3, 2, 3, 8, 9, 10, 15, 13];

$max_numbers  = max($numbers);
$min_numbers  = min($numbers);

// $hasil = '';

for ($a = $min_numbers; $a <= $max_numbers; $a++) {
	if (in_array($a, $numbers)) {
		echo "";
	} else {
		// array_push($a, $hasil);

		// $hasil .= $a . ',';

		echo "$a ,";
	}
}
