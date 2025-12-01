<?php

require 'helpers.php';

// array_chunk(array $array, int $length, bool $preserveKeys = false): array

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));//to preserve the keys, you need to pass the 3rd arg as true