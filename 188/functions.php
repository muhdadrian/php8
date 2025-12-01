<?php

/* functions */

declare(strict_types=1);

function sum(int|float $x, int|float $y, ...$numbers): int|float {
	return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 50, '100', '25', 8, 9) . '<br>'; //this will still work with both 100 and 25 in string data type, even in strict type.

