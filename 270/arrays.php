<?php

require 'helpers.php';

$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array);

usort($array, fn($a, $b) => $b <=> $a);// the keys are removed and it numeric now. sort removed the custom key, it will use numeric keys

prettyPrintArray($array);

