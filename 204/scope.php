<?php

/* variable scopes */

$x = 5;

function foo(){
	echo $x;
}

foo(); //this will result error because every var within function has local scope. To make the var x exist in the function there are 3 options 