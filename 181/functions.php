<?php

/* functions */

declare(strict_types=1);

//if the 1st arg is not even no. it will be divided by two otherwise it will multiply the 1st with the 2nd arg
function foo(int|float $x, int|float $y): int|float {
	if($x % 2 === 0){
		$x /= 2; //x equal to x divided by 2 (x = x / 2)
	}
	return $x * $y;
}

$a = 6.0;
$b = 7;

echo foo($a, $b) . '<br>';

var_dump($a, $b);// the var a still six even: $x /= 2; 