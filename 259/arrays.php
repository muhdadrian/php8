<?php

require 'helpers.php';

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('a', $array); //it we search 'a' it will return 0, but go to 260

var_dump($key);