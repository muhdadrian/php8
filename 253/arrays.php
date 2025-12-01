<?php

require 'helpers.php';

// array_merge(array ...$arrays): array
//if the 1st element in the 1st and 2nd arrays is similar, there will be no overwritten

$array1 = [1, 2, 3];
$array2 = [6 => 4, 7 => 5, 8 => 6]; //this will not affect the array order (reorder)
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);