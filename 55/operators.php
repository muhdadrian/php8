<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)

$x = 10.5;
$y = 2.9;

var_dump($x % $y);//the x and y cast into int. When float cast into int the decimal part is removed. It's similar to x=10 and y=2. 

echo '<br>';

//to perform mod operation on floating no.:
var_dump(fmod($x, $y));

echo '<br>';

$a = 10;
$b = 3;

var_dump($a % $b);

echo '<br>';

$c = 10;
$d = -3;//the result still 1 as the - sign is taken from the number you're dividing

var_dump($c % $d);

echo '<br>';

$e = -10;
$f = 3;

var_dump($e % $f);