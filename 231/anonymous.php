<?php

/* variable, anonymous & arrow functions */

//arrow functions are introduced in php7.4. It's cleaner syntax over anonymous function
//arrow syntax used for inline callback function to pass as an arg to php built-in functions

$array = [1, 2, 3, 4];

//1st arg is callback, 2nd arg as $array
$array2 = array_map(function($number){
	return $number * $number;
}, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';

//we can replace the function above with arrow function in 232