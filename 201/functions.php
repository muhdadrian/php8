<?php

/* functions */

declare(strict_types=1);

function foo(int $x, int $y): int {
	var_dump($x, $y);
	if($x % $y === 0) { 
		return $x / $y;
	}
	return $x;
}

$arr = [2, 'x' => 1]; //this will result in error, The 2 will be passed for the parameter x, and it will try to pass another x of 1 which caused an error
//therefore, name arg can be very useful

echo foo(...$arr); 

