<?php

/* variable, anonymous & arrow functions */

//basically, anonymous functions are instantious of closures
//you can also type closure in the function below instead of callable
//the difference is closure must be an anonymous function and callable can be normal function

$sum = function(closure $callback ,int|float ...$numbers): int|float {
	return $callback(array_sum($numbers));
};

echo $sum(function($element){
	return $element * 2;
}, 1, 2, 3, 4);

