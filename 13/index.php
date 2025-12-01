<?php

function sum($x, $y){
	var_dump($x, $y);
	echo '<br>';
	return $x + $y;
}

$sum = sum(2, '3');//we know the value of 5 is an int, as we can assign it to a var $sum. we can var_dump the sum.

echo $sum . '<br>';
var_dump($sum);
