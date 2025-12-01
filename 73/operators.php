<?php

/* OPERATORS */

//Logical Operators (&& || ! and or xor)

$x = true;//if false, php will short-circuit and hello will never run, as x evaluated to false.  
$y = false;

function hello(){
	echo 'Hello World';

	return false;
}

var_dump($x && hello());// Hello Worldbool(false) - the false as the value

