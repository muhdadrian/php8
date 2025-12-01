<?php 

//key is not required in php. as you saw before you can have arrays without defining keys. It even allows you to have key in some elements. 
//when there's no key, php automaticaly assign the int key 

$array = [1,2,3];
print_r($array);

echo '<br>';

$array2 = ['a', 'b', 'c', 'd', 'e'];
print_r($array2);

echo '<br>';

//the a start from index 0, but when you set c to 50, the rest will start from 51
$array3 = ['a', 'b', 50 => 'c', 'd', 'e'];
print_r($array3);

echo '<pre>';
print_r($array3);
echo '</pre>';
