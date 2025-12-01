<?php 

//to remove the first element in array
$array = ['a', 'b', 50 => 'c', 'd', 'e'];

echo array_shift($array);
//array_shift will re-index
//there's no longer 50 as the key for c as array got re-index and the key for c is 1. It only re-index the numeric key. 

echo '<br>';

print_r($array);