<?php

/* functions */

declare(strict_types=1);

function foo(int $x, int $y): int {
	if($x % $y === 0) { //3 is not divisible by 6, therefore you're returning 3 below
		return $x / $y;
	}
	return $x;
}

$x = 6;
$y = 3;

echo foo($y, $x);//you messed up the order and you pass the args value of y to x in the parameter which will result in unexpected output 
//php 8 allow you to name your args. go to 194
