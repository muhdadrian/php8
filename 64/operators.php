<?php

/* OPERATORS */

//Strict Comparison

$x = 'Hello World';
$y = strpos($x, 'H'); 

if($y === false){
	echo 'H Not Found';
} else {
	echo 'H Found at index ' . $y;
}




