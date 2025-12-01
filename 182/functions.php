<?php

/* functions */

declare(strict_types=1);

//we add & to indicate that we are passing the value by reference
function foo(int|float &$x, int|float $y): int|float {
	if($x % 2 === 0){
		$x /= 2; 
	}
	return $x * $y;
}

$a = 6.0;
$b = 7;

echo foo($a, $b) . '<br>';

var_dump($a, $b);//the var a turned into 3 from 6 as we modified the value within the function 