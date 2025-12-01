<?php

require 'helpers.php';

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('a', $array);

if ($key === false) {
	echo 'Letter not found'; //this will print none because letter a is found
}

//alternatively, we can return bool value instead of returning key in 262