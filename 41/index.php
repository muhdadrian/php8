<?php 

//to remove the last element in array
$array = ['a', 'b', 50 => 'c', 'd', 'e'];

echo array_pop($array);

echo '<br>';

print_r($array);//the element e is no longer there