<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)

$x = 10;
$y = 2;

var_dump($x + $y);

echo '<br>';

$a = '10';
$b = 2;

var_dump($a);

echo '<br>';

var_dump(+$a);//you cast the string to int by prefixing with +

echo '<br>';

var_dump(-$a);

echo '<br>';

$c = +'10';//prefix + to cast the string to int
$d = 2;

var_dump($c);

