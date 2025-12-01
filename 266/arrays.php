<?php

require 'helpers.php';

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];//the 'd' will be gone as it appears in the 2nd array
$array2 = ['d' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff_key($array1, $array2, $array3));//to check the difference on the key