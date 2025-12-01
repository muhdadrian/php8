<?php

/* OPERATORS */

//Loose Comparison

$x = 'Hello World';
$y = strpos($x, 'H'); //look for the letter H and returned the position or index in the string 

//the strpos above will return 0 (as index position) and in if else below: $y = 0 (0 == false), 0 converted into boolean, in loose comparison it returned true. 
if($y == false){
	echo 'H Not Found';
} else {
	echo 'H Found at index ' . $y;
}




