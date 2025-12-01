<?php

//we can specify the var of x and y as int. The second var will come up as int and not as string even we can pass the string in the $sum var below. It's called as type juggling or type coercion.  
function sum(int $x, int $y){
	var_dump($x, $y);
	echo '<br>';
	return $x + $y;
}

$sum = sum(2, '3');

echo $sum . '<br>';
var_dump($sum);
