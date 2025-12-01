<?php 

//Casting

$x = 5;

//we cast the scalar value into an array
var_dump((array) $x);//the 5 will be the 1st element in the array

echo '<br>';

$y = 'foo';
var_dump((array) $y);//same thing will happened to the string

echo '<br>';

$z = null;
var_dump((array) $z);//casting null to array will create empty array