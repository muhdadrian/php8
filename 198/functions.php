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

echo foo($x, y: $y);//this will work, but if you change the y: to x:, it will result an error