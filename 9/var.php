<?php

//Variable Variables
//Variable Variables basically takes the value of var and treats it as the name of new var

$foo = 'bar';

$$foo = 'baz';//this basically is $bar = 'baz';

echo $foo, $bar;//$bar is defined using variable variables 

echo '<br>';

//another proper way to print

echo $foo, $$foo;//this will work the same 

echo '<br>';

echo "$foo , {$$foo}";