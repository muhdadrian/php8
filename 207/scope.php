<?php

/* variable scopes */

$x = 5;

//3rd option, we use global keyword to access the var in the global scope
//the x will be accessible within the function
function foo(){
	global $x; 
	echo $x;
}

foo();