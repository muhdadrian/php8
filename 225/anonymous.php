<?php

/* variable, anonymous & arrow functions */

//when a function is passed to another function as an arg, and it's called within the function, it's called as callback function

//there are few ways you can pass callback function as an arg
//1st you can define anonymous function directly:

$array = [1, 2, 3, 4];

$array2 = array_map(function($element){
	return $element * 2;
}, $array);

echo  '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';

