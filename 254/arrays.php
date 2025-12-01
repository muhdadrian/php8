<?php

require 'helpers.php';

// array_merge(array ...$arrays): array

$array1 = [1, 2, 3];
$array2 = ['a' => 4, 'b' => 5, 'c' => 6]; //we'll see the abc in the keys
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);