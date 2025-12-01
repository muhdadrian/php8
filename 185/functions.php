<?php

/* functions */

declare(strict_types=1);

//by using ...$numbers below, you can add the args as many as you want
function sum(...$numbers): int|float {
	$sum = 0;

	foreach($numbers as $number){
		$sum += $number;
	}

	return $sum;
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 50, 100, 25, 8, 9) . '<br>'; 

//you can do the same process above by using array built-in function to sum the value in 186