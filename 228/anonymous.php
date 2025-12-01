<?php

/* variable, anonymous & arrow functions */

//we can apply the same thing to the function
//we apply the function foo to the result of array_sum

$sum = function(callable $callback ,int|float ...$numbers): int|float {
	return $callback(array_sum($numbers));
};

echo $sum('foo', 1, 2, 3, 4);//we pass foo as a string

function foo($element) {
	return $element * 2;
}
