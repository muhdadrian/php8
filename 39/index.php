<?php 

$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];//null as key is get cast into empty string
print_r($array);

echo '<br>';

echo $array[''];//we can access the value e

echo '<br>';

//or we can access the value e by using null 
echo $array[null];


