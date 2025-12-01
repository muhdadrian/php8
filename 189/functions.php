<?php

/* functions */

declare(strict_types=1);

//you must specify the data type to be captured by $numbers to be in strict mode
function sum(int|float $x, int|float $y, int|float...$numbers): int|float {
	return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 50, '100', '25', 8, 9) . '<br>'; //this will result in error. Convert the str into int above to make it worked
