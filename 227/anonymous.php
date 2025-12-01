<?php

/* variable, anonymous & arrow functions */

$array = [1, 2, 3, 4];

//3rd way is by defining function foo
function foo($element) {
	return $element * 2;
};


$array2 = array_map('foo', $array);

echo  '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';

