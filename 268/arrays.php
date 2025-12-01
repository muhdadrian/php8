<?php

require 'helpers.php';

$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array);

ksort($array);//to sort by key.

prettyPrintArray($array);

//some of the array function do not return a new array instead of a boolean. They take array arg as reference and they modify the original var.