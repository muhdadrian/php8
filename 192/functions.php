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

echo foo($x, $y); //In PHP8, allow you to pass args not in order. go to 193 1st  

