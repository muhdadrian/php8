<?php

require 'helpers.php';

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('a', $array);

if (! in_array('a', $array)){
	echo 'Letter not found'; //nothing will be printed. But, if we change this code in 263
}
