<?php 

$array = ['a', 'b', 50 => 'c', 'd','e'];

unset($array[50]);//to remove the element c.

print_r($array);