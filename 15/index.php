<?php

function sum(int $x, int $y){
	var_dump($x, $y);
	echo '<br>';
	return $x + $y;
}

$sum = sum(2.5, '3');// we change the first var into a float. the result is same.

echo $sum . '<br>';
var_dump($sum);
