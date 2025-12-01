<?php 

//to check if key exist in an array

$array =['a' => 1, 'b' => null];

var_dump((array_key_exists('a', $array)));//1st arg is the key, 2nd arg is the array | this will print true as it existed

echo '<br>';

var_dump(isset($array['a']));

//the difference is array_key_exists if the key is actually exist in array or not, while isset will tell if the key exist and not null. be aware when using isset as it will result in mysterious bugs that hard to find 

echo '<br>';

var_dump((array_key_exists('b', $array)));

echo '<br>';

var_dump(isset($array['b']));
