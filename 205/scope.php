<?php

/* variable scopes */

$x = 5;

//1st option
function foo(){
	$x = 1;//we define the var here
	echo $x;
}

foo();