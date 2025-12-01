<?php

/* OPERATORS */

//Logical Operators (&& || ! and or xor)
$x = true;
$y = false;

var_dump($x && $y);//both must be true to output true

echo '<br>';

$a = true;
$b = true;

var_dump($a && $b);

echo '<br>';

//x and y do not have to be boolean value, it could be int and any type, as PHP will do the type conversion
$x1 = 1;
$y1 = 1;

var_dump($x1 && $y1);//if one of the var is 0 for example y1, the output will false

