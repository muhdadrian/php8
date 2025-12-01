<?php

/* variable scopes */

$x = 5;

function foo(){

	//php store global var in associative array called GLOBALS where the key is the var name, and the value is var value. You can access them that way instead of using global keyword
	echo $GLOBALS['x'];
}

foo();

echo $x; 