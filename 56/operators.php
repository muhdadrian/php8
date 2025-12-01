<?php

/* OPERATORS */

// Assignment Operators (= += -= *= /= %= **=)
$x = $y = 10;

var_dump($x, $y);

echo '<br>';

//not recommended to write code like below as it less readable
$a = ($b = 10) + 5;

var_dump($a, $b);
