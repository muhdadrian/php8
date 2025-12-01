<?php

/* OPERATORS */

//Comparison Operators (== === /== <> /=== < > <= >= <==> ?? ?:)

//?? and ?: are known as conditional operator 

//ternary operator (?:)
$x = 'Hello World';
$y = strpos($x, 'H');

$result = $y === false ? 'H Not Found' : 'H Found at index ' . $y;

echo $result;

