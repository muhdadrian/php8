<?php

/* variable, anonymous & arrow functions */

//anonymous or called lambda function -- a function that has no name

//but in anonymous function you can access the var in parent scope by using the 'use' keyword and passing the var you want to access 
//this type of anonymous function where you can access var out of its local scope known as closure

$x = 1;
$sum = function (int|float ...$numbers) use ($x): int|float {
	echo $x;
	return array_sum($numbers);
}; 

echo $sum(1, 2, 3, 4);