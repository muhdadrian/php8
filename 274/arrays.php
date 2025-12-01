<?php

require 'helpers.php';

//we specify keys

$array = [1, 2, 3];

[1 => $a, 0 => $b, 2 => $c] = $array; 

echo $a . ', ' . $b . ', ' . $c . '</br>'; 