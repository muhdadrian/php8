<?php

/* variable, anonymous & arrow functions */

$array = [1, 2, 3, 4];


$array2 = array_map(fn($number) => $number * $number, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';

//one of the differences, you can always access the var from the parent scope within the arrow function without the need to use the 'use' keyword in 233 