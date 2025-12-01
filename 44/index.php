<?php 

//another way to remove element is by using unset. We use it to destroy var. If you use it in array and specified the index, it will remove the element. If you don't specify the index, it will destroy entire array. 
$array = ['a', 'b', 50 => 'c', 'd','e'];

unset($array);//the var got destroyed

print_r($array);