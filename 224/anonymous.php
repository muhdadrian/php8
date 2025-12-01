<?php

/* variable, anonymous & arrow functions */

//just like in regular function parameters, you can pass the $x after use below by using &
$x = 1;
$sum = function (int|float ...$numbers) use (&$x): int|float {
	$x = 15;
	echo $x;
	return array_sum($numbers);
}; 

echo $sum(1, 2, 3, 4);

echo '<br>' . $x;//the original value will change also to 15 instead of 1 due to &.