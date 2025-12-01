<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)

$x = 10;
$y = 2;

var_dump($x / $y);

echo '<br>';

$a = 10;
$b = 3;

var_dump($a / $b);

echo '<br>';

$c = 10;
$d = 2.0;

var_dump($c / $d);

echo '<br>';

$e = 10;
$f = 0;

//var_dump($e / $f);

echo '<br>';

$g = 10;
$h = 0;

var_dump(fdiv($g, $h));//fdiv - to avoid the error in e and f above. it will pass both arg and returned infinity

