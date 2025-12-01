<?php

require 'helpers.php';

// array_combine(array $keys, array $values): array

$array1 = ['a', 'b', 'c'];//if the size does not match, it will throw an error. Try adding another 'd' value
$array2 = [5, 10, 15];


prettyPrintArray(array_combine($array1, $array2));//array1 as keys and array2 as values to create a new array