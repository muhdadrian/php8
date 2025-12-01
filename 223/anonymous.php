<?php

/* variable, anonymous & arrow functions */



$x = 1;
$sum = function (int|float ...$numbers) use ($x): int|float {//the var x after use is being copied into anonymous function. It means when you change the var to 15 below, initially it printed 15, but the global scope didn't change
	$x = 15;
	echo $x;
	return array_sum($numbers);
}; 

echo $sum(1, 2, 3, 4);

echo '<br>' . $x;//print the global scope var