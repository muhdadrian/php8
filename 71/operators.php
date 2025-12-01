<?php

/* OPERATORS */

//Logical Operators (&& || ! and or xor)

//! = unary operator = negation
$x = 0;
$y = false;

var_dump(!$x || $y);//!$x is an expression which is true. Therefore, the entire expression evaluate to true
echo '<br>';

$a = true;
$b = false;
$c = $a && $b;//this will result false
var_dump($c);

echo '<br>';

$d = true;
$e = false;
$f = $d and $e;//this will result true
var_dump($f);

//the output for both 'and' and && are due to precedence 
//the = (assignment operator) is higher in precedence than 'and' operator. Therefore, $f = $d is evaluated 1st and then the 'and' where the 2nd evaluation will be discarded.
