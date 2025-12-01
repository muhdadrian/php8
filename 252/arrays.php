<?php

require 'helpers.php';

// array_merge(array ...$arrays): array

//to merge multiple arrays

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);