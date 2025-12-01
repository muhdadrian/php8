<?php

require 'helpers.php';

// array_keys(array $keys, mixed $search_value, bool $strict = false): array

$array =['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keys = array_keys($array);

prettyPrintArray($keys);