<?php

/* functions */

declare(strict_types=1);

function foo(int|float $x, int|float $y) {
	return $x * $y;
}

echo foo(5.0, 10);//if you forgot the 2nd arg, it will resulted in error

//recommended to use strict type when using union type (the pipe), because type coercion can be tricky and resulted unexpected value