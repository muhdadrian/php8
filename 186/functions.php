<?php

/* functions */

declare(strict_types=1);

function sum(...$numbers): int|float {
	return array_sum($numbers);
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 50, 100, 25, 8, 9) . '<br>'; 

//you can also use the spread operator above after the fixed args in 187