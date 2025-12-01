<?php

/* OPERATORS */

//Logical Operators (&& || ! and or xor)
$x = 1;
$y = 0;

var_dump($x || $y);//one must be true 
echo '<br>';

$a = 0;
$b = 0;

var_dump($a || $b);

echo '<br>';

$c = 0;
$d = true;

var_dump($c || $d);

echo '<br>';

$e = 0;
$f = false;

var_dump($e || $f);