<?php

//if php can't do the conversion dynamically, it will throw an error for example if the 1st var is an array where previously it's an int
function sum(array $x, int $y){
	var_dump($x, $y);
	echo '<br>';
	return $x + $y;
}

$sum = sum(2.5, '3');

echo $sum . '<br>';
var_dump($sum);
