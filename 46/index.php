<?php 

$array = ['a', 'b', 50 => 'c', 'd','e'];

unset($array[50], $array[1]);//to remove the elements b and c.

print_r($array);