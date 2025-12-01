<?php 

$array = [1, 2, 3];

unset($array[0], $array[1], $array[2]);//we remove all the elements and we'll have empty array

//we push another element in the array
$array[] = 1;//this is equal to $array[3] = 1. The maximum key int is retained, which is 2. Why the key is 3 in the output is because 2 + 1 (new element).

print_r($array);