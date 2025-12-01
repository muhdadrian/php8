<?php

/* variable, anonymous & arrow functions */

//var function
function sum(int|float ...$numbers): int|float {
	return array_sum($numbers);
}

$x = 'sum';

//to avoid an error we use is_callable function to check if the var can be called as a function 
if (is_callable($x)) {
	echo $x(1, 2, 3, 4);
} else {
	echo 'Not Callable';//try to make the function name above wrong 'function sub' to run this else code
}
