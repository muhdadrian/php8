<?php

require 'helpers.php';

//we destructure the array into separate vars in a line

$array = [1, 2, 3, 4];

//list($a, $b, $c, $d) = $array; //shorthand version at below:

[$a, $b, $c, $d] = $array;

echo $a . ', ' . $b . ', ' . $c . ', ' . $d . '</br>';

