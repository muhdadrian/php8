<?php

/*
To create var in php:
- start with either letter or underscore. letter can be upper or lower case, but cannot start with number or special char.
 */

$name = 'Gio';

echo $name;

echo '<br>';

// the var in php by default assigned by value 
$x = 1;
$y = $x;
$x = 3;
echo $y;//this will print 1 and not 3, because var assigned by value.  

echo '<br>';

//to change $y whenever $x change, we need to assign var by reference, instead of by value by using &
$a = 1;
$b = &$a;
$a = 3;
echo $b;