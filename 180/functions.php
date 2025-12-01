<?php

/* functions */

declare(strict_types=1);

//you can set default value for y
function foo(int|float $x, int|float $y=10) {
	return $x * $y;
}

echo foo(5.0);//this will work as there's default value above