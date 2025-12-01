<?php

/* functions */

//declare(strict_types=1);

function foo(int $x, int $y) {
	return $x * $y;
}

echo foo(5.0, '10');// this will still work as we are not enforcing strict type

//gio recommends strict type 