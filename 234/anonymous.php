<?php

/* variable, anonymous & arrow functions */

$array = [1, 2, 3, 4];

$y = 5;
//you cannot modify the var that is defined in parent scope within the arrow function
//the ++$y below will increment the value and multiply the number by 6, but when you echoed the var at the bottom, it still 5 
$array2 = array_map(fn($number) => $number * $number * ++$y, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';

echo $y;

//in arrow function, you can only have a single expression and returned the value of that expression
