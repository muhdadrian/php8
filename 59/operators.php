<?php

/* OPERATORS */

//Comparison Operators (== === /== <> /=== < > <= >= <==> ?? ?:)
$x = 5;
$y = 3;

var_dump($x == $y);//loose comparison (does type conversion for you)

echo '<br>';

var_dump($x === $y);//strict comparison(check the data type of the value)

