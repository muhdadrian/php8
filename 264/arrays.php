<?php

require 'helpers.php';

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($array1, $array2, $array3)); //4 and 5 from the 1st array also appeared in the 2nd array. Number 3 appeared in the 3rd array. Therefore number 3,4,5 are discarded because they can be found in the other array.
//array_dif are only checking the values, and not the keys
//if you want to check the keys, use another function in 265
