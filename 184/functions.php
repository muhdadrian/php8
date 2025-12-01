<?php

/* functions */

declare(strict_types=1);

function sum(int|float $x, int|float $y): int|float {
	return $x + $y;
}

$a = 6.0;
$b = 7;

echo sum($a, $b) . '<br>'; 
