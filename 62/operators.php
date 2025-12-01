<?php

/* OPERATORS */

//Comparison Operators (== === /== <> /=== < > <= >= <==> ?? ?:)
$x = 5;
$y = 10;

var_dump($x < $y);
echo '<br>';
var_dump($x > $y);
echo '<br>';
var_dump($x <= $y);
echo '<br>';
var_dump($x >= $y);
echo '<br>';
var_dump($x <=> $y);//combine less than equal and greater than sign | it will return 0 if x = y and it will return x < y = -1 and x > y = 1
echo '<br>';
var_dump(0 == 'hello');//before php 8 for e.g in php 7.4 the hello will be converted to number: therefore it will result zero. When 0 == '0', it will result true | in php 8, the hello is no longer converted to 0. Instead of when the 'hello' is non-numeric, the 0 will be converted to string ('0' == 'hello). Therefore the string comparison will happen. It will return false, as 0 is not equal to hello

echo '<br>';
var_dump(0 == '0');//(0 = '0') - this will return true even in php 8
echo '<br>';
var_dump(0 === '0');//use strict type and strict comparison to avoid potential issues. 






