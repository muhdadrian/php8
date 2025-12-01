<?php 

//if you have similar multiple keys, the last one will overwrite the others
$array = [0 => 'foo', 1 => 'bar', '1' => 'baz'];
print_r($array);//the element in index 1 is baz, it's because baz has the same key with bar. It's overwrote. 

echo '<br>';

//the keys have to be string or int, though php will cast the key when possible
$array2 = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd'];
print_r($array2);//there will be only 1 value. It's because true is cast into 1, 1 is 1 and overwrite a with b, string '1' overwrite the int 1 with c, and 1.8 get cast into int and when float get cast into int, the decimal get removed, it also equals 1. Therefore, it overwrites everything before and the value is d. That's how we get single element here.    