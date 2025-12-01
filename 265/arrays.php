<?php

require 'helpers.php';

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff_assoc($array1, $array2, $array3));// to check for the keys and values
//the 'd' doesn't match with 'f'. Unless you change the 'f' to 'd'.