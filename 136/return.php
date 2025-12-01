<?php 

// return | declare | goto

function sum(int $x, int $y) {
	$z = $x + $y;

	return $z;//return ends the function execution and returns value 
}

$x = sum(5, 10);
echo $x;

echo '<br>';

echo 'Hello World';// this shows that the return above does not end the script execution