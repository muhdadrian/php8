<?php

require 'helpers.php';

// array_map(callable|null $callback, array $array, array ...$arrays): array

$array = [1, 2, 3, 4, 5, 6];

$array = array_map(fn($number) => $number * 3, $array); //second arg is array

prettyPrintArray($array);
