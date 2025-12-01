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

setcookie('foo', 'bar', 0, '', '', false, true);//for cleaner code at 196 (use case for name arg like below)

echo foo(y: $y, x: $x); 