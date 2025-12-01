<?php

/* variable, anonymous & arrow functions */

$array = [1, 2, 3, 4];

$y = 5;//for e.g you declare the var here and then accessing it within the arrow function below
$array2 = array_map(fn($number) => $number * $number * $y, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';

