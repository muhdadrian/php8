<?php

require 'helpers.php';

// array_map(callable|null $callback, array $array, array ...$arrays): array

// multiple arrays

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2); //second arg is array

prettyPrintArray($array);

// array will be reindex and there will no str key, as we pass more than an array
// if we pass a single array to the array map function, it will preserve the key
//you must apply the same length of both array elements (the callback will apply in parallel)