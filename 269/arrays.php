<?php

require 'helpers.php';

$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array);

usort($array, fn($a, $b) => $a <=> $b);//use spaceship operator to sort numerically
//return 0 when a and b is equal
//return a number less than 0 or -1 if a < b
//return number greater than 0 or 1 when a > b
//to reverse the order go to 270

prettyPrintArray($array);

