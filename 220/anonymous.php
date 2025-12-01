<?php

/* variable, anonymous & arrow functions */

//anonymous or called lambda function -- a function that has no name

//because the function below is an expression, we can assign it to var
$sum = function (int|float ...$numbers): int|float {
	return array_sum($numbers);
}; 

echo $sum(1, 2, 3, 4);