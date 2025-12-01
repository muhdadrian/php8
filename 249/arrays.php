<?php

require 'helpers.php';

// array_keys(array $keys, mixed $search_value, bool $strict = false): array

$array =['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keys = array_keys($array, 10, true);//we use strict comparison by adding true as the arg 

//try to make the 10 above to '10'. It will no longer find the value

prettyPrintArray($keys);

