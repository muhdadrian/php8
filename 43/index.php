<?php 

//for non-numeric key (foo), it will be retained and not re-index
$array = ['a', 'b', 50 => 'c', 'd', 'foo' => 'e'];

echo array_shift($array);

echo '<br>';

print_r($array);