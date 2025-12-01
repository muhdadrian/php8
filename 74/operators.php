<?php

/* OPERATORS */

//Logical Operatros (&& || ! and or xor)

$x = false;//try true
$y = false;

function hello(){
	echo 'Hello World';

	return false;
}

var_dump($x && hello() || true);//the true is executed and hello is not executed. The reason is operator precedence and associativity (next video). && operator has higher precendence than the || operator. Therefore, $x && hello() is group together, which is false and the || has to evaluate the other operand. The final result of the expression is true.
