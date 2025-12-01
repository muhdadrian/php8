<?php

/* OPERATORS */

//Array Operators (+ == === /== <> /===)

//change to associative array
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];

$z = $x == $y;
var_dump($z);//z is false as two arrays do not have the same key value pairs. 
