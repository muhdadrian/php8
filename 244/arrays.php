<?php

require 'helpers.php';

// array_filter(array $array, callable|null $callback = null, int $mode = 0): array

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//to filter out the odd number
$even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);
//by default the array value is passed to the callback as the arg. But, we can change it by specifiying the mode flag as the 3rd para 
//can also use ARRAY_FILTER_USE_KEY

prettyPrintArray($even);