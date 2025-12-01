<?php

require 'helpers.php';

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

//$key = array_search('b', $array); 
$key = array_search('D', $array); //search is also case sensitive (upper or lower case)

//array search will return false if it cannot find the value, but it can return 0 if it finds the matching value in the 0 position.
//therefore, always use strict comparison

var_dump($key);