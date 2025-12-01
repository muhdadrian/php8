<?php 

$array = ['a', 'b', 50 => 'c', 'd','e'];

//unset will not re-index the array
unset($array[1]);//we remove the b and the max no of 50 is retained and not re-index 

print_r($array);