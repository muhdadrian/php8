<?php

/* variable, anonymous & arrow functions */

//var function
function sum(int|float ...$numbers): int|float {
	return array_sum($numbers);
}

//you can also do like this:

$x = 'sum';//this will call the function above

echo $x(1, 2, 3 ,4);

