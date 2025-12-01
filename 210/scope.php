<?php

/* variable scopes */

$x = 5;

function foo(){

	$GLOBALS['x'] = 10;	//we can change the value. This is called super global.

	echo $GLOBALS['x'];
}

foo();

echo $x; 

//we should avoid at all cost from using the super global and global var in general, as it will hard to read and maintain, and a lot easier to introduce to bugs.
//instead of doing like above, you should use the function parameters and function return to get the data in outer function.
