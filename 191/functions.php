<?php

/* functions */

declare(strict_types=1);

//spread operator can unpack array into args list 
function sum(int|float $x, int|float $y, int|float...$numbers): int|float {
	return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 7;
$numbers = [50, 100, 25.90, 8, 9];

echo sum($a, $b, ...$numbers) . '<br>';

//spread operator allows you to define the data type of each element, while in array you cannot define the type