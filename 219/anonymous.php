<?php

/* variable, anonymous & arrow functions */

//anonymous or called lambda function -- a function that has no name

function (int|float ...$numbers): int|float {
	return array_sum($numbers);
}; //we remove the sum name to make it anonymous and we must end the function with semi-colon.

$x = 'sum';

if (is_callable($x)) {
	echo $x(1, 2, 3, 4);
} else {
	echo 'Not Callable';//we run this code as there's no sum function 
}
