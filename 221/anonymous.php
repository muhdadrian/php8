<?php

/* variable, anonymous & arrow functions */

//anonymous or called lambda function -- a function that has no name

//as mentioned in previous lesson, function has its local scope. if you try to access the var from out of its local scope, you'll get an error

$x = 1;
$sum = function (int|float ...$numbers): int|float {
	echo $x;
	return array_sum($numbers);
}; 

echo $sum(1, 2, 3, 4);