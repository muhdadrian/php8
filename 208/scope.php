<?php

/* variable scopes */

$x = 5;

function foo(){
	global $x;// this is actually reference to the original var (5) 

	$x = 10;//to change the value to 10

	echo $x;
}

foo();

echo $x; // we get 10 as well, not 5