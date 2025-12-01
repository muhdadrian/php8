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

setcookie(name: 'foo', value: 'bar', httponly: true); //setcookie will be discussed later.

echo foo(y: $y, x: $x); 