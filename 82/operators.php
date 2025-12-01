<?php

/* OPERATORS */

//Array Operators (+ == === /== <> /===)

//change to associative array
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];


//keys are unique and do not match, therefore everything appended to the var  
$z = $x + $y;
var_dump($z);
echo '<br>';
print_r($z);