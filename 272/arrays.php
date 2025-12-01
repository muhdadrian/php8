<?php

require 'helpers.php';

// we can skip the element by simply removing $b for example

$array = [1, 2, 3, 4];

// [$a, $b, $c, $d] = $array;
[$a, , $c, $d] = $array; //remove b, but retained the comma

echo $a . ', ' . $c . ', ' . $d . '</br>'; //remove b also

//try to remove d as