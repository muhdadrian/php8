<?php

/* OPERATORS */

//Increment/Decrement Operators (++, --)

//two types of increment and decrement: pre and post 
$x = 5;

$x++;//this will return the value and then does the increment
$x--;// ""
++$x;//increment 1st then return the value
--$x;// ""

echo '<br>';

//practice
$a = 5;

echo $a++;//this will return the value 1st
echo '<br>';
echo $a;//this will return the increment

echo '<br>';
echo ++$a;//we get the increment value 1st
echo '<br>';

//this operator only affect number and string. 
$b = true;

echo ++$b;//this will not increment the bool value
echo '<br>';

//increment in null will output 1, while the decrement, nothing
$c = null;
echo ++$c;
echo '<br>';
$d = null;
echo --$d;
echo '<br>';

//increment has effect in string value, while decrement no
$e = 'abc';
echo ++$e;
echo '<br>';
$f = 'abc';
echo --$f;