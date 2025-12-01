<?php

/* functions */

declare(strict_types=1);

function foo(int $x, int $y): int {
	if($x % $y === 0) { 
		return $x / $y;
	}
	return $x;
}

$x = 6;
$y = 3;

//if you pass the same parameter for multiple times, you'll get an error
echo foo(x: $y, x: $x); 