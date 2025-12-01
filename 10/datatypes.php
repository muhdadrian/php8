<?php

/* Data Types */

# 4 Scalar Types
//1. bool - true / false
$completed = true; //true (1) | false (blank)
//2. int - 1, 2, 3, 0, -5 (no decimal)
$score = 75;
//3. float - 1.5, 0.1, 0.005, -15.8
$price = 0.99;
//4. string - "Gio", "Hello World"
$greeting = 'Hello Gio';

echo $completed . '<br>';
echo $score . '<br>';
echo $price . '<br>';
echo $greeting . '<br>';

echo '<br>';

echo gettype($completed) . '<br>';
echo gettype($score) . '<br>';
echo gettype($price) . '<br>';
echo gettype($greeting) . '<br>';


echo '<br>';

//var_dump is another way to find the type of the var. it will print everything it knows about the expression you give it to 
var_dump($completed);//it will print the value that the var holds and the data type of the var
echo '<br>';
var_dump($score);
echo '<br>';
var_dump($price);
echo '<br>';
var_dump($greeting);
echo '<br>';

# 4 Compound Types
//1. array - the list of items. Items can be many different types
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
//echo $companies;//this will just print array
print_r($companies);
var_dump($companies);
echo '<br>';
echo '<br>';
//2. object
//3. callable
//4. iterable

# 2 Special Types
// resource
// null - no value 

/* Type Casting */

$x = '5';

var_dump($x);
echo '<br>';

//to cast the string above into int

$a = (int)'5';
var_dump($a);
