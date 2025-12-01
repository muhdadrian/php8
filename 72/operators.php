<?php

/* OPERATORS */

//Logical Operators (&& || ! and or xor)

$x = true;
$y = false;

var_dump($x || $y);//the y value is never get evaluated to short circuit by PHP in logical operator.

echo '<br>';

$a = true;
$b = false;

function hello(){
	echo 'Hello World';

	return false;
}

var_dump($a || hello());//hello will never be printed

