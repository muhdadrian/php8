<?php

require 'helpers.php';

// array_filter(array $array, callable|null $callback = null, int $mode = 0): array

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//to filter out the odd number
$even = array_filter($array, fn($number) => $number % 2 === 0);// the 2nd arg is a callable or calback function


prettyPrintArray($even);