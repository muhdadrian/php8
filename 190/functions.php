<?php

/* functions */

declare(strict_types=1);

function sum(int|float $x, int|float $y, int|float...$numbers): int|float {
	return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 50, 100, 25.90, 8, 9) . '<br>'; //we try float one of the args
