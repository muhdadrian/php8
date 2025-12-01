<?php

require 'helpers.php';

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('a', $array);

if ($key == false) {
	echo 'Letter not found';//we got letter not found, but actually we found the letter a in 259. Therefore, we need to use strict comparison in 261
}