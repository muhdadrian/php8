<?php

/* variable, anonymous & arrow functions */

$array = [1, 2, 3, 4];

$x = function($element) {
	return $element * 2;
};

//another way (2nd method) is by simply assigning anonymous function to var
$array2 = array_map($x, $array);

echo  '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';

